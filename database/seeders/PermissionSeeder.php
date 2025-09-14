<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // Define  roles
        $roles = [
            [
                'name' => 'Admin',
            ],
            [
                'name' => 'Manager',
            ],
            [
                'name' => 'Editor',
            ],
            [
                'name' => 'Contributor'
            ],
            [
                'name' => 'Support Staff'
            ],

        ];
        // Define  permissions
        $permissions = [
            'Dashboard' => [
                'Dashboard Cards',
                'Dashboard Charts',
                'Dashboard Pie Charts',
            ],
            'Manage Pre-Requisitions' => [
                'All Pre-Requisitions',
                'Create Pre-Requisition',
                'Edit Pre-Requisition',
                'Delete Pre-Requisition',
            ],
            'Role' => [
                'All Roles',
                'Create Role',
                'Edit Role',
                'Delete Role',
            ],
            'Admin' => [
                'All Admins',
                'Create Admin',
                'Edit Admin',
                'Show Admin',
                'Delete Admin',
            ],
            'Manage Member' => [
                'All Members',
                'Create Member',
                'Edit Member',
                'Show Member',
                'Login Member',
                'Delete Member',
            ],
            'Manage Teacher' => [
                'All Teachers',
                'Create Teacher',
                'Edit Teacher',
                'Block Teacher',
                'Approve Teacher',
                'Login Teacher',
                'Delete Teacher',
            ],
            'Manage Coach' => [
                'All Coachs',
                'Create Coach',
                'Edit Coach',
                'Block Coach',
                'Approve Coach',
                'Login Coach',
                'Delete Coach',
            ],
            'Manage Student' => [
                'All Students',
                'Create Student',
                'Edit Student',
                'Login Student',
                'Delete Student',
            ],
            'Manage Course' => [
                'All Courses',
                'Hold Course',
                'View Course',
                'Approve Course',
                'Edit Course',
                'Delete Course',
            ],
            'Manage Bootcamp' => [
                'All Bootcamps',
                'Hold Bootcamp',
                'View Bootcamp',
                'Approve Bootcamp',
                'Delete Bootcamp',
            ],
            'Manage Playground' => [
                'All Playgrounds',
                'Create Playground',
                'Edit Playground',
                'Delete Playground',

                'All AWS Accounts',
                'Create AWS Account',
                'Edit AWS Account',
                'Delete AWS Account',

                'All Questions',
                'Create Question',
                'Edit Question',
                'Delete Question',
            ],
            'Manage Exam' => [
                'All Exams',
                'Create Exam',
                'Edit Exam',
                'Add Exam Question',
                'Delete Exam',
            ],
            'Manage Event' => [
                'All Events',
                'Create Event',
                'Edit Event',
                'Delete Event',

                'All Speakers',
                'Create Speaker',
                'Edit Speaker',
                'Delete Speaker',

                'All Attendees',
                'Create Attendee',
                'Edit Attendee',
                'Delete Attendee',
            ],
            'Manage Ebook' => [
                'All Ebooks',
                'Create Ebook',
                'Edit Ebook',
                'Show Ebook',
                'Delete Ebook',
                'Delete Reserve Ebook',
            ],
            'Manage Blog' => [
                'All Blogs',
                'Create Blog',
                'Edit Blog',
                'Show Blog',
                'Delete Blog',
            ],
            'Manage Wiki' => [
                'All Wikis',
                'Create Wiki',
                'Edit Wiki',
                'Show Wiki',
                'Delete Wiki',
            ],
            'Manage Coupon' => [
                'All Coupons',
                'Create Coupon',
                'Edit Coupon',
                'Delete Coupon',
            ],
            'Manage Subscription' => [
                'All Subscriptions',
                'Create Subscription',
                'Edit Subscription',
                'Show Subscription',
                'Delete Subscription',
            ],
            'Manage Transactions' => [
                'All Payments',
                'Delete Payment',
                'All Invoices',
                'Delete Invoice',
                'All Withdraw Request',
                'Payout Withdraw Request',
                'Show Withdraw Request',
                'Reject Withdraw Request',
                'All Refund Request',
                'Payout Refund Request',
                'Show Refund Request',
                'Reject Refund Request',
            ],
            'Manage Businesses' => [
                'All Api Plans',
                'Create Api Plan',
                'Edit Api Plan',
                'Delete Api Plan',
            ],
            'Manage Forum' => [
                'All Forums',
                'Create Forum',
                'Edit Forum',
                'Delete Forum',
            ],
            'Manage Ticket' => [
                'All Tickets',
                'Edit Ticket',
                'Show Ticket',
                'Delete Ticket',
            ],
            'Manage Faq' => [
                'All Faqs',
                'Edit Faq',
                'Create Faq',
                'Delete Faq',
            ],
            'Manage Announcement' => [
                'All Announcements',
                'Edit Announcement',
                'Create Announcement',
                'Delete Announcement',
            ],
            'Manage Comment' => [
                'All Comments',
                'Edit Comment',
                'Delete Comment',
            ],
            'Manage Review' => [
                'All Reviews',
                'Edit Review',
                'Delete Review',
            ],
            'Manage Contact List' => [
                'All Contact Lists',
                'Show Contact',
                'Delete Contact',
            ],
            'Manage Certificate' => [
                'Edit Certificate',
                'Show Certificate',
            ],
            'Manage PolicySettings' => [
                'All PolicySettings',
                'Update PolicySettings',
            ],
            'Manage Settings' => [
                'All Settings',
                'Update Settings',
            ],
        ];

        // create roles and permissions
        foreach ($roles as $role) {
            Role::create($role);
        }

        foreach ($permissions as $parent => $childs) {
            $id = Permission::create(['name' => $parent])->id;
            foreach ($childs as $child) {
                Permission::create([
                    'parent_id' => $id,
                    'name' => $child,
                ]);
            }
        }
    }
}
