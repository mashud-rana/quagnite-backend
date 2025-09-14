<?php

namespace App\Services;

use App\Models\EnrollExam;
use App\Models\User;

class SubscribeService
{
    public function __construct(
        protected User $user,
        protected EnrollExam $enrollExam
    ) {
    }

    public function checkUserSubscriptionActive(User $user)
    {
        return $user->subscribes()->active()->exists();
    }

    // public function getUserSubscriptionId($user)
    // {
    //     return $user->subscribes()->active()->first()->id;
    // }

    // Exam

    public function getUserExamLimit($user)
    {
        return optional($user->subscribes()->active()->first())->subscription->exam_limit;
    }

    public function isExamUnlimited($user)
    {
        return optional($user->subscribes()->active()->first())->subscription->unlimited_exam;
    }

    public function getTotalEnrollExam($user)
    {
        $subscribedId = $this->getUserSubscribedId($user);

        return $this->enrollExam->whereUserId($user->id)->where('subscription_list_id', $subscribedId)->count();
    }

    public function getUserSubscribedId($user)
    {
        return $user->subscribes()->active()->first()->id;
    }

    public function getUserRemainExam($user)
    {
        if ($this->getUserExamLimit($user) == 0) {

            return null;
        } else {

            return $this->getUserExamLimit($user) - $this->getTotalEnrollExam($user);
        }
    }

    public function isSubscriptionAvailableForExam(User $user)
    {
        if (! $this->checkUserSubscriptionActive($user)) {
            return false;
        }

        $remain = $this->getUserRemainExam($user);

        $isUnlimitedExam = $this->isExamUnlimited($user);

        return is_null($remain) || $remain > 0 || $isUnlimitedExam;
    }
}
