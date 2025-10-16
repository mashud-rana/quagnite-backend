<?php

namespace App\Models;

use DB;
use App\Models\Ticket;
use App\Models\Transaction;
use App\Models\BillingAddress;
use App\Traits\ModelBootHandler;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens,
        HasFactory,
        Notifiable,
        SoftDeletes,
        HasRoles,
        ModelBootHandler;

    protected $appends = ['full_name', 'avatar_url'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     *
     */

    protected $guarded = ['id',];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isUserType(string $user_type): bool
    {
        return $this->user_type === $user_type;
    }

    //get active data
    public function scopeActive($query)
    {
        return $query->where('status', ACTIVE);
    }

    // Accessor & mutators

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getAvatarUrlAttribute()
    {
        return getStoreFile($this->avatar, $this->storage_type);
    }

    public function enrolledCourses()
    {
        return $this->hasMany(EnrollCourse::class, 'user_id');
    }

    public function coach()
    {
        return $this->hasOne(Coach::class, 'user_id');
    }

    public function teacher()
    {
        return $this->hasOne(Teacher::class, 'user_id');
    }

    public function student()
    {
        return $this->hasOne(Student::class, 'user_id');
    }

    public function organization()
    {
        return $this->hasOne(Organization::class);
    }

    public function subscribes()
    {
        return $this->hasMany(SubscriptionList::class);
    }

    public function enrollExams()
    {
        return $this->hasMany(EnrollExam::class);
    }

    public function enrollApis()
    {
        return $this->hasMany(EnrollApi::class, 'user_id', 'id');
    }

    public function unseenMessagesCount()
    {
        return DB::table('ch_messages')
            ->where('to_id', $this->id)
            ->where('seen', 0)
            ->count();
    }

    public function reviews()
    {
        return $this->morphMany(Review::class, 'reviewable');
    }

    public function averageRating()
    {
        return $this->reviews()->avg('rating');
    }

    public function totalReviews()
    {
        return $this->reviews()->count();
    }

    public function assignedTickets()
    {
        return $this->hasMany(Ticket::class, 'assigned_by');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'user_id');
    }

    public function getTotalEarningAttribute()
    {
        $totalCredit = $this->transactions()->where('type', CREDIT)->sum('amount');

        return $totalCredit;
    }

    public function lectures()
    {
        return $this->belongsToMany(CourseLecture::class, 'lecture_user', 'user_id', 'lecture_id')
            ->withPivot('completed')
            ->withTimestamps();
    }

    public function billingAddress()
    {
        return $this->hasOne(BillingAddress::class);
    }

    public function user_info(){
        return $this->hasOne(UserInfo::class, 'user_id', 'id');
    }


    public function announcement_reads()
    {
        return $this->morphMany(AnnouncementRead::class, 'readable');
    }


    public static function boot()
    {
        parent::boot();

        static::enableUuidBootHandler();
        static::enableStorageTypeBootHandler();
    }
}
