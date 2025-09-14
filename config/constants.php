<?php

return [
    // User types
    'USER_TYPE_ADMIN' => 'admin',
    'USER_TYPE_STUDENT' => 'student',
    'USER_TYPE_COACH' => 'coach',
    'USER_TYPE_TEACHER' => 'teacher',
    'USER_TYPE_MEMBER' => 'member',
    'USER_TYPE_COMPANY' => 'company',

    // Auth Providers
    'AUTH_PROVIDER_GOOGLE' => 'google',
    'AUTH_PROVIDER_FACEBOOK' => 'facebook',
    'AUTH_PROVIDER_LINKEDIN' => 'linkedin',
    'AUTH_PROVIDER_ARRAY' => [
        'google',
        'facebook',
        'linkedin',
    ],

    // Storage Driver
    'STORAGE_TYPE_PUBLIC' => 'public',
    'STORAGE_TYPE_S3' => 's3',

    // Pusher mode
    'PUSHER_MODE_DEV' => 'dev',
    'PUSHER_MODE_PROD' => 'prod',

    // Status
    'PENDING' => 1,
    'ACTIVE' => 2,
    'INACTIVE' => 3,
    'HOLD' => 4,
    'BLOCK' => 5,
    'INPROGRESS' => 6,
    'ARCHIVE' => 7,
    'COMPLETE' => 8,
    'REJECT' => 9,
    'DRAFT' => 10,
    'PUBLISHED' => 11,
    'EXPIRED' => 12,
    'UPCOMING' => 13,
    'APPROVED' => 14,
    'WAITING' => 15,
    'OPEN' => 16,
    'ASSIGNED' => 17,
    'ANSWERED' => 18,
    'CLOSED' => 19,
    'PAST' => 20,

    // Balance Type
    'CREDIT' => 'credit',
    'DEBIT' => 'debit',

    // Subscription Type
    'MONTHLY' => 'monthly',
    'YEARLY' => 'yearly',

    // API Type
    'API_MONTHLY' => 'monthly',
    'API_YEARLY' => 'yearly',

    // Playground Type
    'PlAYGD_AWS' => 'aws',
    'PlAYGD_GCP' => 'gcp',
    'PlAYGD_AZURE' => 'azure',
    'PlAYGD_GIT' => 'git',
    'PlAYGD_PYTHON' => 'python',
    'PlAYGD_BASH' => 'bash',
    'PlAYGD_GO' => 'go',
    'PlAYGD_JAVA' => 'java',
    'PlAYGD_K8SSN' => 'k8ssn',
    'PlAYGD_K8SMN' => 'k8smn',
    'PlAYGD_TERRAFORM' => 'terraform',
    'PlAYGD_ANSIBLE' => 'ansible',
    'PlAYGD_JENKINS' => 'Jenkins',
    'PlAYGD_ARGOCD' => 'argocd',
    'PlAYGD_MAVEN' => 'maven',
    'PlAYGD_HELM' => 'helm',
    'PlAYGD_GITLAB' => 'gitlab',
    'PlAYGD_DOCKER' => 'docker',
    'PlAYGD_PODMAN' => 'podman',
    'PlAYGD_GRPR' => 'grpr',
    'PlAYGD_CHEF' => 'chef',
    'PlAYGD_PWS' => 'pws',
    'PlAYGD_UOS2004' => 'uos2004',
    'PlAYGD_COS8' => 'cos8',

    // Lecture Format
    'LECTURE_FORMAT_VIDEO' => 'video',
    'LECTURE_FORMAT_VIMEO' => 'vimeo',
    'LECTURE_FORMAT_IMAGE' => 'image',
    'LECTURE_FORMAT_PDF' => 'pdf',
    'LECTURE_FORMAT_SLIDE' => 'slide',
    'LECTURE_FORMAT_AUDIO' => 'audio',

    // Course accessibility type
    'COURSE_ACCESS_FREE' => 'free',
    'COURSE_ACCESS_PAID' => 'paid',

    // Course Level
    'COURSE_LEVEL_BEGINER' => 'beginer',
    'COURSE_LEVEL_INTERMEDIATE' => 'intermediate',
    'COURSE_LEVEL_EXPERT' => 'expert',

    // Payment
    'PAYMENT_METHOD_STRIPE' => 'stripe',
    'PAYMENT_METHOD_PAYPAL' => 'paypal',
    'PAYPAL_MODE_SANDBOX' => 'sandbox',
    'PAYPAL_MODE_LIVE' => 'live',

    // Ebook Type
    'EBOOK_TYPE_PDF' => 'pdf',
    'EBOOK_TYPE_AUDIO' => 'audio',
    'EBOOK_TYPE_VIDEO' => 'video',

    // File Upload
    'FILE_CHUNK_SIZE' => 5000000,

    // Cart Item Type
    'CART_TYPE_COURSE' => 'course',
    'CART_TYPE_BOOTCAMP' => 'bootcamp',
    'CART_TYPE_EBOOK' => 'ebook',
    'CART_TYPE_EXAM' => 'exam',
    'CART_TYPE_COACHING' => 'coaching',
    'CART_TYPE_API' => 'API',
    'CART_TYPE_SUBSCRIPTION' => 'subscription',

    // Coupon Types
    'API' => 'API',
    'EXAM' => 'exam',
    'COURSE' => 'course',
    'BOOTCAMP' => 'bootcamp',
    'EBOOK' => 'ebook',
    'COACH' => 'coaching',
    'GLOBAL_COUPON' => 'global',
    'PLAYGROUND' => 'playground',
    'SUBSCRIPTION' => 'subscription',

    'FORGET_PASSWORD_EXPIRE_IN_MIN' => 30, // in minutes

    "GENDER_MALE" => "male",
    "GENDER_FEMALE" => "female",
    "GENDER_OTHER" => "other"
];
