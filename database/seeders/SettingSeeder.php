<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                'setting_key' => 'site_title',
                'setting_value' => 'MCDNS',
            ],
            [
                'setting_key' => 'site_url',
                'setting_value' => 'https://mcdns.test',
            ],
            [
                'setting_key' => 'site_logo',
                'setting_value' => 'demo/images/settings/logo.png',
            ],
            [
                'setting_key' => 'footer_logo',
                'setting_value' => 'demo/images/settings/logo.png',
            ],
            [
                'setting_key' => 'favicon_logo',
                'setting_value' => 'demo/images/settings/favicon.png',
            ],
            [
                'setting_key' => 'login_image',
                'setting_value' => 'demo/images/settings/login-right.png',
            ],
            [
                'setting_key' => 'data_notfound',
                'setting_value' => 'demo/images/settings/data-not-found.png',
            ],
            [
                'setting_key' => 'about_company',
                'setting_value' => 'Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.',
            ],
            [
                'setting_key' => 's_phone',
                'setting_value' => '123456789',
            ],
            [
                'setting_key' => 's_email',
                'setting_value' => 'mcdns@gmail.com',
            ],
            [
                'setting_key' => 's_address',
                'setting_value' => '4517 Washington Ave. Manchester, Kentucky 39495',
            ],
            [
                'setting_key' => 'g_map_iframe',
                'setting_value' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.6046772615146!2d90.4127090142569!3d23.868167690185743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c5d2f5f0d427%3A0x6004f6bcdd7583fd!2sITclan%20BD!5e0!3m2!1sen!2sbd!4v1665481046907!5m2!1sen!2sbd',
            ],
            [
                'setting_key' => 'mail_mailer',
                'setting_value' => 'smtp',
            ],
            [
                'setting_key' => 'mail_host',
                'setting_value' => 'smtp-relay.brevo.com',
            ],
            [
                'setting_key' => 'mail_port',
                'setting_value' => '587',
            ],
            [
                'setting_key' => 'mail_username',
                'setting_value' => '640490001@smtp-brevo.com',
            ],
            [
                'setting_key' => 'mail_password',
                'setting_value' => 'C6LIz5mUvMOfcd2A',
            ],
            [
                'setting_key' => 'mail_encryption',
                'setting_value' => 'tls',
            ],
            [
                'setting_key' => 'mail_from_address',
                'setting_value' => 'support@mcdns.tech',
            ],
            [
                'setting_key' => 'mail_from_name',
                'setting_value' => 'MCDNS',
            ],
            [
                'setting_key' => 'facebook',
                'setting_value' => 'https://facebook.com',
            ],
            [
                'setting_key' => 'twitter',
                'setting_value' => 'https://twitter.com',
            ],
            [
                'setting_key' => 'linkedin',
                'setting_value' => 'https://linkedin.com',
            ],
            [
                'setting_key' => 'instagram',
                'setting_value' => 'https://instragram.com',
            ],
            [
                'setting_key' => 'pinterest',
                'setting_value' => 'https://pinterest.com',
            ],
            [
                'setting_key' => 'google_client_id',
                'setting_value' => '646130357139-37in8lqhlsin5nkim7pp59vnift5ijfd.apps.googleusercontent.com',
            ],
            [
                'setting_key' => 'google_client_secret',
                'setting_value' => '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',
            ],
            [
                'setting_key' => 'google_redirect_url',
                'setting_value' => config('app.url').'/auth/google/callback',
            ],
            [
                'setting_key' => 'facebook_client_id',
                'setting_value' => null,
            ],
            [
                'setting_key' => 'facebook_client_secret',
                'setting_value' => null,
            ],
            [
                'setting_key' => 'facebook_redirect_url',
                'setting_value' => null,
            ],
            [
                'setting_key' => 'linkedin_client_id',
                'setting_value' => null,
            ],
            [
                'setting_key' => 'linkedin_client_secret',
                'setting_value' => null,
            ],
            [
                'setting_key' => 'linkedin_redirect_url',
                'setting_value' => null,
            ],
            [
                'setting_key' => 'stripe_key',
                'setting_value' => 'pk_test_51MNx4EJJ0NigAct7GDRkz71x7NqpFQvTyFLcLsWeQQ7MX6PeDq0F0c9ea0bhZbLh8eSgNueDWLgb1vr5iHZD8hiS00HpJbz5rz',
            ],
            [
                'setting_key' => 'stripe_secret',
                'setting_value' => 'sk_test_51MNx4EJJ0NigAct7PnP1iwpdfo9C79j6d0Zo0qfeWJvCEtR9GjgPyYNa4BWcg75FymFOB2laNbZhmUWdyL6g3Vmh008FzcymBW',
            ],
            [
                'setting_key' => 'stripe_base_uri',
                'setting_value' => 'https://api.stripe.com',
            ],
            [
                'setting_key' => 'paypal_mode',
                'setting_value' => 'sandbox',
            ],
            [
                'setting_key' => 'paypal_sandbox_client_id',
                'setting_value' => 'AZtBvcJzpkB62F5pU5Ta4tnXcqdfcQZ3ASGy7BIuoPiPVudM547OIswLIVEZN0oewGV3axGxERA99zAl',
            ],
            [
                'setting_key' => 'paypal_sandbox_client_secret',
                'setting_value' => 'EH-mI9ww_bn0qjHiM8EQS5SzS3LxT7zKnYfDS4uuBsXONvYuzmn0exnwp9MJw0PLBeiJ0cR304BX2_c6',
            ],
            [
                'setting_key' => 'paypal_sandbox_base_uri',
                'setting_value' => 'https://api-m.sandbox.paypal.com',
            ],
            [
                'setting_key' => 'paypal_live_client_id',
                'setting_value' => null,
            ],
            [
                'setting_key' => 'paypal_live_client_secret',
                'setting_value' => null,
            ],
            [
                'setting_key' => 'paypal_live_base_uri',
                'setting_value' => 'https://api-m.paypal.com',
            ],
            [
                'setting_key' => 'system_commission',
                'setting_value' => 20,
            ],
            [
                'setting_key' => 'min_withdraw',
                'setting_value' => 5,
            ],
            [
                'setting_key' => 'oc_access_key',
                'setting_value' => 'rqhr4cq89vbuc3zgbhxprgvjxj9hdfbhmwjz5aku24pvf9u2gdj76sa9fcknwz6w37kwf4bd78sa8nr2amvukwtdxa3njjvx83vje9jj7n5bawpzqwa8uf8fn47cbaqr',
            ],
            [
                'setting_key' => 'oc_base_uri',
                'setting_value' => 'https://onecompiler.com/api/v1/run',
            ],
            [
                'setting_key' => 'ubuntu_region',
                'setting_value' => 'us-east-1',
            ],
            [
                'setting_key' => 'ubuntu_ami',
                'setting_value' => 'ami-084b1ee5db2babb45',
            ],
            [
                'setting_key' => 'ubuntu_instance_type',
                'setting_value' => 't2.micro',
            ],
            [
                'setting_key' => 'ubuntu_security_group',
                'setting_value' => 'sg-08384eb6875dd82f2',
            ],
            [
                'setting_key' => 'ubuntu_ssh_key_name',
                'setting_value' => 'uplay',
            ],
            [
                'setting_key' => 'ubuntu_status',
                'setting_value' => 1,
            ],
            [
                'setting_key' => 'storage_driver',
                'setting_value' => STORAGE_TYPE_PUBLIC,
            ],
            [
                'setting_key' => 'aws_key',
                'setting_value' => 'AKIATCKASF6LUR56VHOE',
            ],
            [
                'setting_key' => 'aws_secret',
                'setting_value' => 'ElwURMn8kp9q211V5mRlSNcxIoYNyqH67oZURyG0',
            ],
            [
                'setting_key' => 'aws_region',
                'setting_value' => 'us-east-1',
            ],
            [
                'setting_key' => 'aws_bucket',
                'setting_value' => 'mcdns-media',
            ],
            [
                'setting_key' => 'aws_bucket_endpoint',
                'setting_value' => 'https://mcdns-media.s3.us-east-1.amazonaws.com',
            ],
            [
                'setting_key' => 'zoom_client_id',
                'setting_value' => 'mWpeTAT6R5SSE6lJcF9srw',
            ],
            [
                'setting_key' => 'zoom_client_secret',
                'setting_value' => '7bFnq8Ky9UE5S5SG2RQx5K1tiLOISCHW',
            ],
            [
                'setting_key' => 'zoom_account_id',
                'setting_value' => '-Y8y1wghQ76h5-YSqWG1FA',
            ],
            [
                'setting_key' => 'zoom_web_client_id',
                'setting_value' => 'Ttlok0qQTe2qPpHTulTFEA',
            ],
            [
                'setting_key' => 'zoom_web_client_secret',
                'setting_value' => 'xtjuDOaMBzno2s9RToOQiLZ3saKOt93c',
            ],
            [
                'setting_key' => 'pusher_mode',
                'setting_value' => PUSHER_MODE_DEV,
            ],
            [
                'setting_key' => 'dev_pusher_app_id',
                'setting_value' => '1620865',
            ],
            [
                'setting_key' => 'dev_pusher_app_key',
                'setting_value' => 'd266d1aaea1fe80914bb',
            ],
            [
                'setting_key' => 'dev_pusher_app_secret',
                'setting_value' => '15140d16ed585fbacf5f',
            ],
            [
                'setting_key' => 'dev_pusher_app_cluster',
                'setting_value' => 'ap2',
            ],
            [
                'setting_key' => 'pusher_app_id',
                'setting_value' => '1819832',
            ],
            [
                'setting_key' => 'pusher_app_key',
                'setting_value' => '0ec999175f43d4a6e6aa',
            ],
            [
                'setting_key' => 'pusher_app_secret',
                'setting_value' => 'a017ebfd339048f7387f',
            ],
            [
                'setting_key' => 'pusher_app_cluster',
                'setting_value' => 'mt1',
            ],
            [
                'setting_key' => 'platform_charge',
                'setting_value' => 0,
            ],
            [
                'setting_key' => 'playground_domain',
                'setting_value' => 'studily.live',
            ],
            [
                'setting_key' => 'playground_domain_hosted_zone_id',
                'setting_value' => 'Z06636147CELJTJIQNPF',
            ],
            [
                'setting_key' => 'aws_playground_region',
                'setting_value' => 'us-east-1',
            ],
            [
                'setting_key' => 'playground_duration',
                'setting_value' => '1',
            ],
            [
                'setting_key' => 'gcp_user_prefix',
                'setting_value' => 'mcdns_user_',
            ],
            [
                'setting_key' => 'gsuite_domain',
                'setting_value' => 'studily.live',
            ],
            [
                'setting_key' => 'gcp_app_name',
                'setting_value' => 'Mcdns',
            ],
            [
                'setting_key' => 'azure_user_prefix',
                'setting_value' => 'mcdns_user_',
            ],
            [
                'setting_key' => 'azure_domain',
                'setting_value' => 'nahidulitclanbd.onmicrosoft.com',
            ],
            [
                'setting_key' => 'azure_app_name',
                'setting_value' => 'Mcdns',
            ],
            [
                'setting_key' => 'vimeo_client',
                'setting_value' => 'd610a3a68a141371305ddfe6286a8fbf5c852858',
            ],
            [
                'setting_key' => 'vimeo_secret',
                'setting_value' => 'P5IGBI52umgNdaRKwqY3sxgadrDKZctCTBt8ro7fEUIqdtLh6swni8P67JDEovaHpw98XOc+EoDsOMPfWBg2x180sDI8rBHmDwKi0nyD7ELEgNqV3y8uEDOHBGd0Cf44',
            ],
            [
                'setting_key' => 'vimeo_access',
                'setting_value' => 'e37e41444c58798d6743cd94b50f8612',
            ],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
