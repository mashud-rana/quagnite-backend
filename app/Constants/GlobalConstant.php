<?php

declare(strict_types=1);

namespace App\Constants;

class GlobalConstant
{
    // Auth Accepted Providers
    public const AUTH_PROVIDER_GOOGLE = 'google';
    public const AUTH_PROVIDER_FACEBOOK = 'facebook';
    public const AUTH_PROVIDER_LINKEDIN = 'linkedin';

    public const AUTH_PROVIDER_ARRAY = [self::AUTH_PROVIDER_GOOGLE, self::AUTH_PROVIDER_FACEBOOK, self::AUTH_PROVIDER_LINKEDIN];

    // Status
    public const STATUS_ACTIVE    = 'active';
    public const STATUS_INACTIVE  = 'inactive';
    public const STATUS_PENDING   = 'pending';

    // Default
    public const DEFAULT_PER_PAGE     = 12;
    public const DEFAULT_RECENT_LIMIT = 5;
    public const DEFAULT_THUMB_WIDTH  = 300;
    public const DEFAULT_THUMB_HEIGHT = 170;
    public const DEFAULT_QR_CODE_SIZE = 300;

    // Event
    public const EVENT_STU_PER_PAGE  = 12;
    public const EVENT_PLACE_ONLINE  = 'online';
    public const EVENT_PLACE_OFFLINE = 'offline';
    public const EVENT_FEE_FREE      = 'free';
    public const EVENT_FEE_PAID      = 'paid';

    public const EVENT_TYPE_EVENT             = 'event';
    public const EVENT_TYPE_SEMINAR           = 'seminar';
    public const EVENT_TYPE_WORKSHOP          = 'workshop';
    public const EVENT_TYPE_BOOTCAMP          = 'bootcamp';
    public const EVENT_APPLY_STATUS_CONFIRMED = 'confirmed';
    public const EVENT_APPLY_STATUS_PENDING   = 'pending';
    public const EVENT_SPONSORED              = true;

    // Course accessibility type
    public const COURSE_ACCESS_FREE = 'free';
    public const COURSE_ACCESS_PAID = 'paid';

    //Course Lavel
    public const COURSE_LEVEL_BEGINER = 'beginer';
    public const COURSE_LEVEL_INTERMEDIATE = 'intermediate';
    public const COURSE_LEVEL_EXPERT = 'expert';

    // Lecture Format
    public const LECTURE_FORMAT_VIDEO = 'video';
    public const LECTURE_FORMAT_VIMEO = 'vimeo';
    public const LECTURE_FORMAT_IMAGE = 'image';
    public const LECTURE_FORMAT_PDF = 'pdf';
    public const LECTURE_FORMAT_SLIDE = 'slide';
    public const LECTURE_FORMAT_AUDIO = 'audio';
    // BOOTCAMP
    public const BOOTCAMP_FEE_FREE = 'free';
    public const BOOTCAMP_FEE_PAID = 'paid';
    // BOOTCAMP Type
    public const BOOTCAMP_TYPE_ONE_TO_ONE  = 'one_to_one';
    public const BOOTCAMP_TYPE_ONE_TO_MANY = 'one_to_many';
    public const BOOTCAMP_TYPE_MY_BOOTCAMP  = 'my_bootcamp';
    // One to one BOOTCAMP
    public const BOOTCAMP_ALL_ONE_TO_ONE      = 'all_one_to_one';
    public const BOOTCAMP_ACCEPTED_ONE_TO_ONE = 'accepted_one_to_one';
    public const BOOTCAMP_REJECTED_ONE_TO_ONE = 'rejected_one_to_one';

    // Payment
    public const PAYMENT_METHOD_STRIPE = 'stripe';
    public const PAYMENT_METHOD_PAYPAL = 'paypal';
    public const PAYPAL_MODE_SANDBOX   = 'sandbox';
    public const PAYPAL_MODE_LIVE      = 'live';

    //Discount Type
    public const DISCOUNT_FIXED = 'fixed';
    public const DISCOUNT_PERCENTAGE = 'percentage';

    //Ticket Status
    public const TICKET_STATUS_OPEN = 'open';
    public const TICKET_STATUS_SOLVED = 'solved';
    public const TICKET_STATUS_ASSIGNED = 'assigned';
    public const TICKET_STATUS_REJECTED = 'rejected';
    public const TICKET_STATUS_ANSWERED = 'answered';

    //Ticket Type
    public const TICKET_TYPE_GENERAL = 'general';
    public const TICKET_TYPE_COURSE = 'course';
    public const TICKET_TYPE_BOOTCAMP = 'bootcamp';

    //reply type
    public const TICKET_REPLY_TYPE_COMMENT = 'comment';
    public const TICKET_REPLY_TYPE_REPLY = 'reply';

    //Subscription Type
    public const SUBSCRIPTION_TYPE_MONTHLY = 'monthly';
    public const SUBSCRIPTION_TYPE_YEARLY = 'yearly';

    //Api Type
    public const API_TYPE_MONTHLY = 'monthly';
    public const API_TYPE_YEARLY = 'yearly';

    //Site Settings
    public const SITE_COMMISSION = 15;
    public const WITHDRAW_LIMIT = 5;

    // Withdraw
    public const WITHDRAW_TYPE_ONLINE  = 'online';
    public const WITHDRAW_TYPE_BANK    = 'bank';

    //Enroll course status
    public const ENROLL_COURSE_STATUS_PENDING = 'pending';
    public const ENROLL_COURSE_STATUS_COMPLETE = 'complete';

    // Ebook Type
    public const EBOOK_TYPE_PDF = 'pdf';
    public const EBOOK_TYPE_AUDIO = 'audio';
    public const EBOOK_TYPE_VIDEO = 'video';

    // Playground Type
    public const PlAYGD_AWS = 'aws';
    public const PlAYGD_GCP = 'gcp';
    public const PlAYGD_AZURE = 'azure';
    public const PlAYGD_GIT = 'git';
    public const PlAYGD_PYTHON = 'python';
    public const PlAYGD_BASH = 'bash';
    public const PlAYGD_GO = 'go';
    public const PlAYGD_JAVA = 'java';
    public const PlAYGD_K8SSN = 'knm';
    public const PlAYGD_K8SMN = 'kns';
    public const PlAYGD_TERRAFORM = 'terraform';
    public const PlAYGD_ANSIBLE = 'ansible';
    public const PlAYGD_JENKINS = 'Jenkins';
    public const PlAYGD_ARGOCD = 'argocd';
    public const PlAYGD_MAVEN = 'maven';
    public const PlAYGD_HELM = 'helm';
    public const PlAYGD_GITLAB = 'gitlab';
    public const PlAYGD_DOCKER = 'docker';
    public const PlAYGD_PODMAN = 'podman';
    public const PlAYGD_GRPR = 'grpr';
    public const PlAYGD_CHEF = 'chef';
    public const PlAYGD_PWS = 'pws';
    public const PlAYGD_UOS2004 = 'uos2004';
    public const PlAYGD_COS8 = 'cos8';

    // Cart Item Type
    public const CART_TYPE_COURSE = 'course';
    public const CART_TYPE_BOOTCAMP = 'bootcamp';
    public const CART_TYPE_EBOOK = 'ebook';
    public const CART_TYPE_EXAM = 'exam';
    public const CART_TYPE_COACHING = 'coaching';
    public const CART_TYPE_API = 'API';
    public const CART_TYPE_SUBSCRIPTION = 'subscription';


    public static function allowedPlaygrounds(): array
    {
        return [
            self::PlAYGD_AWS,
            self::PlAYGD_GCP,
            self::PlAYGD_AZURE,
            self::PlAYGD_GIT,
            self::PlAYGD_PYTHON,
            self::PlAYGD_BASH,
            self::PlAYGD_GO,
            self::PlAYGD_JAVA,
            self::PlAYGD_K8SSN,
            self::PlAYGD_K8SMN,
            self::PlAYGD_TERRAFORM,
            self::PlAYGD_ANSIBLE,
            self::PlAYGD_JENKINS,
            self::PlAYGD_ARGOCD,
            self::PlAYGD_MAVEN,
            self::PlAYGD_HELM,
            self::PlAYGD_GITLAB,
            self::PlAYGD_DOCKER,
            self::PlAYGD_GRPR,
            self::PlAYGD_CHEF,
            self::PlAYGD_PWS,
            self::PlAYGD_UOS2004,
            self::PlAYGD_COS8
        ];
    }

    public static function allowedLectureFormat(): array
    {
        return [
            self::LECTURE_FORMAT_VIDEO,
            self::LECTURE_FORMAT_VIMEO,
            self::LECTURE_FORMAT_IMAGE,
            self::LECTURE_FORMAT_PDF,
            self::LECTURE_FORMAT_SLIDE,
            self::LECTURE_FORMAT_AUDIO,
        ];
    }
    public static function allowedEbookType(): array
    {
        return [
            self::EBOOK_TYPE_PDF,
            self::EBOOK_TYPE_AUDIO,
            self::EBOOK_TYPE_VIDEO,
        ];
    }
}
