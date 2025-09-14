<?php

namespace App\Traits;

use App\Models\Invoice;
use Illuminate\Support\Str;

trait ModelBootHandler
{
    protected static $createdUpdatedBootHandler = false;

    protected static $slugBootHandler = false;

    protected static $storageTypeBootHandler = false;

    protected static $uuidBootHandler = false;

    protected static $authUserIdBootHandler = false;

    protected static $trxIdBootHandler = false;

    protected static $invoiceIdBootHandler = false;

    public static function disableCreatedUpdatedBootHandler()
    {
        static::$createdUpdatedBootHandler = false;
    }

    public static function enableCreatedUpdatedBootHandler()
    {
        static::$createdUpdatedBootHandler = true;
    }

    public static function disableSlugBootHandler()
    {
        static::$slugBootHandler = false;
    }

    public static function enableSlugBootHandler()
    {
        static::$slugBootHandler = true;
    }

    public static function disableStorageTypeBootHandler()
    {
        static::$storageTypeBootHandler = false;
    }

    public static function enableStorageTypeBootHandler()
    {
        static::$storageTypeBootHandler = true;
    }

    public static function disableUuidBootHandler()
    {
        static::$uuidBootHandler = false;
    }

    public static function enableUuidBootHandler()
    {
        static::$uuidBootHandler = true;
    }

    public static function disableAuthUserIdBootHandler()
    {
        static::$authUserIdBootHandler = false;
    }

    public static function enableAuthUserIdBootHandler()
    {
        static::$authUserIdBootHandler = true;
    }

    public static function disableTrxIdBootHandler()
    {
        static::$trxIdBootHandler = false;
    }

    public static function enableTrxIdBootHandler()
    {
        static::$trxIdBootHandler = true;
    }

    public static function disableInvoiceIdBootHandler()
    {
        static::$invoiceIdBootHandler = false;
    }

    public static function enableInvoiceIdBootHandler()
    {
        static::$invoiceIdBootHandler = true;
    }

    public static function booted()
    {
        // created by and updated by
        if (static::$createdUpdatedBootHandler) {

            static::creating(function ($model) {
                $model->created_by = auth()->id() ?? null;
            });

            static::updating(function ($model) {
                $model->updated_by = auth()->id() ?? null;
            });
        }

        // SLUG
        if (static::$slugBootHandler) {

            self::creating(function ($model) {
                $model->slug = static::createUniqueSlug($model->title);
            });
        }

        // UUID
        if (static::$uuidBootHandler) {

            self::creating(function ($model) {
                $model->uuid = Str::uuid()->toString();
            });
        }

        // Auth ID
        if (static::$authUserIdBootHandler) {

            self::creating(function ($model) {
                $model->user_id = auth()->id();
            });
        }

        // storage type
        if (static::$storageTypeBootHandler) {

            self::creating(function ($model) {
                $model->storage_type = config('settings.storage_driver');
            });
            static::updating(function ($model) {
                $model->storage_type = config('settings.storage_driver');
            });
        }

        // Trx ID
        if (static::$trxIdBootHandler) {

            self::creating(function ($model) {
                $model->trx_id = Str::random(30);
            });
        }

        // Invoice ID
        if (static::$invoiceIdBootHandler) {

            self::creating(function ($model) {
                $model->invoice_id = 'MC-'.now()->format('Y-m-d').'-'.str_pad(Invoice::max('id') + 1, 5, '0', STR_PAD_LEFT);
            });
        }
    }

    protected static function createUniqueSlug($title)
    {
        $slug = Str::slug($title);

        while (static::where('slug', $slug)->exists()) {
            $slug = $slug.'-'.Str::random(10);
        }

        return $slug;
    }
}
