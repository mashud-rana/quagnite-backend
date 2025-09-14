<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu vertical-menu-change">

    <div data-simplebar class="h-100">
        <div class="navbar-brand-box">
            <a href="{{ route('front.home') }}" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="{{ asset('admin/images/logo.png') }}" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="{{ asset('admin/images/logo.png') }}" alt="" height="17">
                </span>
            </a>

            <a href="{{ route('front.home') }}" class="logo logo-light">
                <span class="logo-sm">
                    <img src="{{ asset('admin/images/logo.png') }}" alt="" height="20">
                </span>
                <span class="logo-lg">
                    <img src="{{ asset('admin/images/logo.png') }}" alt="" height="60">
                </span>
            </a>
        </div>
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                <li class="{{ request()->is('admin/dashboard') ? 'li-active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}"
                        class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                        <i class="ri-home-smile-2-line"></i>
                        <span>Home</span>
                    </a>
                </li>

                {{-- Administration --}}
                @hasexactroles('Super Admin')
                    <li class="{{ request()->is('admin/roles*') || request()->is('admin/users*') ? 'li-active' : '' }}">
                        <a href="javascript: void(0);"
                            class="{{ request()->is('admin/roles*') || request()->is('admin/users*') ? 'active' : '' }}">
                            <i class="ri-admin-line"></i>
                            <span>Administration</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li class="{{ request()->is('admin/users*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.users.index') }}"
                                    class="{{ request()->is('admin/users*') ? 'active' : '' }}">Users</a>
                            </li>

                            <li class="{{ request()->is('admin/roles*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.roles.index') }}"
                                    class="{{ request()->is('admin/roles*') ? 'active' : '' }}">Roles</a>
                            </li>
                        </ul>
                    </li>
                @endhasexactroles

{{--                @can('Manage cms')--}}
                    <li class="{{ request()->is('admin/cms*') ? 'li-active' : '' }}">
                        <a href="javascript: void(0);" class="{{ request()->is('admin/cms*') ? 'active' : '' }}">
                            <i class="mdi mdi-webpack"></i>
                            <span>Manage CMS</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li class="{{ request()->is('admin/cms/pages') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.cms.pages.index') }}"
                                   class="{{ request()->is('admin/cms/pages') ? 'active' : '' }}">Pages</a>
                            </li>
                        </ul>
                    </li>
{{--                @endcan--}}

                {{-- Manage Teacher --}}
                @can('Manage Teacher')
                    <li class="{{ request()->is('admin/teachers*') ? 'li-active' : '' }}">
                        <a href="javascript: void(0);" class="{{ request()->is('admin/teachers*') ? 'active' : '' }}">
                            <i class="ri-user-2-fill"></i>
                            <span>Manage Teachers</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li class="{{ request()->is('admin/teachers*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.teachers.index') }}"
                                    class="{{ request()->is('admin/teachers*') ? 'active' : '' }}">All Teachers</a>
                            </li>
                            <li class="{{ request()->is('admin.teachers.pending*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.teachers.pending.list') }}"
                                    class="{{ request()->is('admin.teachers.pending*') ? 'active' : '' }}">Pending
                                    Teachers</a>
                            </li>
                            <li class="{{ request()->is('admin.teachers.approve*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.teachers.approve.list') }}"
                                    class="{{ request()->is('admin.teachers.approve*') ? 'active' : '' }}">Approved
                                    Teachers</a>
                            </li>
                            <li class="{{ request()->is('admin.teachers.block*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.teachers.block.list') }}"
                                    class="{{ request()->is('admin.teachers.block*') ? 'active' : '' }}">Blocked
                                    Teachers</a>
                            </li>
                        </ul>
                    </li>
                @endcan

                {{-- Manage Coach --}}
                @can('Manage Coach')
                    <li class="{{ request()->is('admin/coaches*') ? 'li-active' : '' }}">
                        <a href="javascript: void(0);" class="{{ request()->is('admin/coaches*') ? 'active' : '' }}">
                            <i class="ri-shield-user-line"></i>
                            <span>Manage Coaches</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li class="{{ request()->is('admin/coaches*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.coaches.index') }}"
                                    class="{{ request()->is('admin/coaches*') ? 'active' : '' }}">All Coaches</a>
                            </li>
                            <li class="{{ request()->is('admin.coaches.pending*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.coaches.pending.list') }}"
                                    class="{{ request()->is('admin.coaches.pending*') ? 'active' : '' }}">Pending
                                    Coaches</a>
                            </li>
                            <li class="{{ request()->is('admin.coaches.approve*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.coaches.approve.list') }}"
                                    class="{{ request()->is('admin.coaches.approve*') ? 'active' : '' }}">Approved
                                    Coaches</a>
                            </li>
                            <li class="{{ request()->is('admin.coaches.block*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.coaches.block.list') }}"
                                    class="{{ request()->is('admin.coaches.block*') ? 'active' : '' }}">Blocked
                                    Coaches</a>
                            </li>

                        </ul>
                    </li>
                @endcan
                {{-- Manage Student --}}
                @can('Manage Student')
                    <li class="{{ request()->is('admin/students*') ? 'li-active' : '' }}">
                        <a href="javascript: void(0);" class="{{ request()->is('admin/students*') ? 'active' : '' }}">
                            <i class="ri-user-2-fill"></i>
                            <span>Manage Students</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li class="{{ request()->is('admin/students*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.students.index') }}"
                                    class="{{ request()->is('admin/students') ? 'active' : '' }}">All students</a>
                                <a href="{{ route('admin.students.enrolled.course') }}"
                                    class="{{ request()->is('admin/students/enrolled/course') ? 'active' : '' }}">Course
                                    students</a>
                                <a href="{{ route('admin.students.enrolled.bootcamp') }}"
                                    class="{{ request()->is('admin/students/enrolled/bootcamp') ? 'active' : '' }}">Bootcamp
                                    students</a>
                            </li>
                        </ul>
                    </li>
                @endcan
                @can('Manage Member')
                    <li class="{{ request()->is('admin/members*') ? 'li-active' : '' }}">
                        <a href="javascript: void(0);" class="{{ request()->is('admin/members*') ? 'active' : '' }}">
                            <i class="ri-user-2-fill"></i>
                            <span>Manage Members</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li class="{{ request()->is('admin/members*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.members.index') }}"
                                    class="{{ request()->is('admin/members') ? 'active' : '' }}">All Members</a>
                            </li>
                        </ul>
                    </li>
                @endcan
                {{-- Pre-Requisition --}}
                @can('Manage Pre-Requisitions')
                    <li class="{{ request()->is('admin/tag-categories*') ? 'li-active' : '' }}">
                        <a href="javascript: void(0);"
                            class="{{ request()->is('admin/tag-categories*') ? 'active' : '' }}">
                            <i class="ri-git-pull-request-line"></i>
                            <span>Pre-Requisition</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">

                            <li class="{{ request()->is('admin/tag-categories*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.tag-categories.index') }}"
                                    class="{{ request()->is('admin/tag-categories*') ? 'active' : '' }}">Tag Category</a>
                            </li>
                            <li class="{{ request()->is('admin/tags*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.tags.index') }}"
                                    class="{{ request()->is('admin/tags*') ? 'active' : '' }}">Tag</a>
                            </li>

                            <li class="{{ request()->is('admin/teacher-categories*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.teacher-categories.index') }}"
                                    class="{{ request()->is('admin/teacher-categories*') ? 'active' : '' }}">Teacher
                                    Category</a>
                            </li>
                            <li class="{{ request()->is('admin/coach-categories*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.coach-categories.index') }}"
                                    class="{{ request()->is('admin/coach-categories*') ? 'active' : '' }}">Coach
                                    Category</a>
                            </li>
                            <li class="{{ request()->is('admin/ebook-categories*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.ebook-categories.index') }}"
                                    class="{{ request()->is('admin/ebook-categories*') ? 'active' : '' }}">Ebook
                                    Category</a>
                            </li>
                            <li class="{{ request()->is('admin/course-categories*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.course-categories.index') }}"
                                    class="{{ request()->is('admin/course-categories*') ? 'active' : '' }}">Course
                                    Category</a>
                            </li>

                            <li class="{{ request()->is('admin/bootcamp-categories*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.bootcamp-categories.index') }}"
                                    class="{{ request()->is('admin/bootcamp-categories*') ? 'active' : '' }}">Bootcamp
                                    Category</a>
                            </li>
                            <li class="{{ request()->is('admin/forum-categories*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.forum-categories.index') }}"
                                    class="{{ request()->is('admin/forum-categories*') ? 'active' : '' }}">Forum
                                    Category</a>
                            </li>
                            <li class="{{ request()->is('admin/blog-categories*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.blog-categories.index') }}"
                                    class="{{ request()->is('admin/blog-categories*') ? 'active' : '' }}">Blog
                                    Category</a>
                            </li>



                            <li class="{{ request()->is('admin/wiki-category*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.wiki-category.index') }}"
                                    class="{{ request()->is('admin/wiki-category*') ? 'active' : '' }}">Wiki
                                    Category</a>
                            </li>


                            <li class="{{ request()->is('admin/blog') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.course-difficulty-levels.index') }}"
                                    class="{{ request()->is('admin/blog') ? 'active' : '' }}">Difficulty level</a>
                            </li>


                            <li class="{{ request()->is('admin/blog/comment/list') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.course-languages.index') }}"
                                    class="{{ request()->is('admin/blog/comment/list') ? 'active' : '' }}">Language</a>
                            </li>
                            <li class="{{ request()->is('admin/grade*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.grade.index') }}"
                                    class="{{ request()->is('admin/grade*') ? 'active' : '' }}">Grades</a>
                            </li>

                        </ul>
                    </li>
                @endcan
                {{-- Manage Course Module --}}
                @can('Manage Course')
                    <li class="{{ request()->is('admin/course*') ? 'li-active' : '' }}">
                        <a href="javascript: void(0);" class="{{ request()->is('admin/course*') ? 'active' : '' }}">
                            <i class="ri-booklet-fill"></i>
                            <span>Manage Courses</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li class="{{ request()->is('admin/course/all-courses') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.course.all') }}"
                                    class="{{ request()->is('admin/course/all-courses') ? 'active' : '' }}">All
                                    Courses</a>
                            </li>
                            <li class="{{ request()->is('admin/course/pending-courses') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.course.pending') }}"
                                    class="{{ request()->is('admin/course/pending-courses') ? 'active' : '' }}">Pending</a>
                            </li>
                            <li class="{{ request()->is('admin/course/hold-courses') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.course.hold') }}"
                                    class="{{ request()->is('admin/course/hold-courses') ? 'active' : '' }}">Hold</a>
                            </li>
                            <li class="{{ request()->is('admin/course/approve-courses') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.course.approve') }}"
                                    class="{{ request()->is('admin/course/approve-courses') ? 'active' : '' }}">Approved</a>
                            </li>
                        </ul>
                    </li>
                @endcan
                {{-- Manage Bootcamps Module --}}
                @can('Manage Bootcamp')
                    <li class="{{ request()->is('admin/bootcamp*') ? 'li-active' : '' }}">
                        <a href="javascript: void(0);" class="{{ request()->is('admin/bootcamp*') ? 'active' : '' }}">
                            <i class="ri-live-fill"></i>
                            <span>Manage Bootcamps</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li class="{{ request()->is('admin/bootcamp/all-bootcamps') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.bootcamp.all') }}"
                                    class="{{ request()->is('admin/bootcamp/all-bootcamps') ? 'active' : '' }}">All
                                    bootcamps</a>
                            </li>
                            <li class="{{ request()->is('admin/bootcamp/pending-bootcamps') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.bootcamp.pending') }}"
                                    class="{{ request()->is('admin/bootcamp/pending-bootcamps') ? 'active' : '' }}">Pending</a>
                            </li>
                            <li class="{{ request()->is('admin/bootcamp/hold-bootcamps') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.bootcamp.hold') }}"
                                    class="{{ request()->is('admin/bootcamp/hold-bootcamps') ? 'active' : '' }}">Hold</a>
                            </li>
                            <li class="{{ request()->is('admin/bootcamp/approve-bootcamps') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.bootcamp.approve') }}"
                                    class="{{ request()->is('admin/bootcamp/approve-bootcamps') ? 'active' : '' }}">Approved</a>
                            </li>
                        </ul>
                    </li>
                @endcan

                @can('Manage Subscription')
                    <li class="{{ request()->is('admin/subscriptions*') ? 'li-active' : '' }}">
                        <a href="{{ route('admin.subscriptions.index') }}"
                            class="{{ request()->is('admin/subscriptions*') ? 'active' : '' }}">
                            <i class="ri-money-dollar-circle-line"></i>
                            <span>Subscription</span>
                        </a>
                    </li>
                @endcan

                {{-- Business --}}
                @can('Manage Businesses')
                    <li class="{{ request()->is('admin/business*') ? 'li-active' : '' }}">
                        <a href="javascript: void(0);" class="{{ request()->is('admin/business*') ? 'active' : '' }}">
                            <i class="ri-money-dollar-box-fill"></i>
                            <span>Manage Business</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li class="{{ request()->is('admin/business/api-plans*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.business.api-plans.index') }}"
                                    class="{{ request()->is('admin/business/api-plans*') ? 'active' : '' }}">Api
                                    Plans</a>
                            </li>
                        </ul>
                    </li>
                @endcan
                {{-- Forum --}}
                @can('Manage Forum')
                    <li class="{{ request()->is('admin/forum*') ? 'li-active' : '' }}">
                        <a href="javascript: void(0);" class="{{ request()->is('admin/forum*') ? 'active' : '' }}">
                            <i class="ri-pen-nib-line"></i>
                            <span>Manage Forum</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li class="{{ request()->is('admin/forum*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.forum.index') }}"
                                    class="{{ request()->is('admin/forum*') ? 'active' : '' }}">All Forum</a>
                            </li>
                        </ul>
                    </li>
                @endcan
                {{-- Coupon --}}
                @can('Manage Coupon')
                    <li class="{{ request()->is('admin/coupon*') ? 'li-active' : '' }}">
                        <a href="{{ route('admin.coupon.index') }}"
                            class="{{ request()->is('admin/coupon*') ? 'active' : '' }}">
                            <i class="ri-coupon-3-fill"></i>
                            <span>Manage Coupon</span>
                        </a>
                    </li>
                @endcan

                {{-- Manage Event --}}
                @can('Manage Event')
                    <li class="{{ request()->is('admin/event*') ? 'li-active' : '' }}">
                        <a href="javascript: void(0);" class="{{ request()->is('admin/event*') ? 'active' : '' }}">
                            <i class="ri-calendar-2-line"></i>
                            <span>Manage Events</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li class="{{ request()->is('admin/event') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.event.events.index') }}"
                                    class="{{ request()->is('admin/event/events*') ? 'active' : '' }}">

                                    <span>All Events</span>
                                </a>
                            </li>
                            <li class="{{ request()->is('admin/event') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.event.pending.events') }}"
                                    class="{{ request()->is('admin/event/pending-events*') ? 'active' : '' }}">

                                    <span>Member Events</span>
                                </a>
                            </li>
                            <li class="{{ request()->is('admin/event') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.event.speaker.index') }}"
                                    class="{{ request()->is('admin/event/speaker*') ? 'active' : '' }}">

                                    <span>All Speakers</span>
                                </a>
                            </li>
                            <li class="{{ request()->is('admin/event') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.event.attendee.index') }}"
                                    class="{{ request()->is('admin/event/attendee*') ? 'active' : '' }}">

                                    <span>All Attendees</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                {{-- Manage Blog --}}
                @can('Manage Blog')
                    <li class="{{ request()->is('admin/blog*') ? 'li-active' : '' }}">
                        <a href="javascript: void(0);" class="{{ request()->is('admin/blog*') ? 'active' : '' }}">
                            <i class="ri-ball-pen-line"></i>
                            <span>Manage Blogs</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li class="{{ request()->is('admin/blog') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.blog.index') }}"
                                    class="{{ request()->is('admin/blog') ? 'active' : '' }}">All Blogs</a>
                            </li>

                            {{-- <li class="{{ request()->is('admin/blog/comment/list') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.blog.comment') }}"
                                    class="{{ request()->is('admin/blog/comment/list') ? 'active' : '' }}">Blog
                                    Comments</a>
                            </li> --}}
                        </ul>
                    </li>
                @endcan
                {{-- Exams --}}
                @can('Manage Exam')
                    <li class="{{ request()->is('admin/exams*') ? 'li-active' : '' }}">
                        <a href="javascript: void(0);" class="{{ request()->is('admin/exams*') ? 'active' : '' }}">
                            <i class="ri-newspaper-line"></i>
                            <span>Exams</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li>
                                <a href="{{ route('admin.exams.index') }}">All Exams</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.exams.enroll-exams.index') }}">Enrolled Exams</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.exams.exams-result.index') }}">Exams Result</a>
                            </li>
                        </ul>
                    </li>
                @endcan

                {{-- Wiki --}}
                @can('Manage Wiki')
                    <li class="{{ request()->is('admin/wiki') ? 'li-active' : '' }}">
                        <a href="{{ route('admin.wiki.index') }}"
                            class="{{ request()->is('admin/wiki') ? 'active' : '' }}">
                            <i class="ri-quill-pen-fill"></i>
                            <span>Wikis</span>
                        </a>
                    </li>
                @endcan
                {{-- Manage Ebooks --}}
                @can('Manage Ebook')
                    <li class="{{ request()->is('admin/ebook*') ? 'li-active' : '' }}">
                        <a href="javascript: void(0);" class="{{ request()->is('admin/ebook*') ? 'active' : '' }}">
                            <i class="ri-book-3-fill"></i>
                            <span>Manage Ebooks</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li class="{{ request()->is('admin/ebook') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.ebook.index') }}"
                                    class="{{ request()->is('admin/ebook') ? 'active' : '' }}">All Ebooks</a>
                            </li>

                            {{-- <li class="{{ request()->is('admin/ebook/reserve') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.ebook.reserve') }}"
                                    class="{{ request()->is('admin/ebook/reserve') ? 'active' : '' }}">Ebook
                                    Reserves</a>
                            </li> --}}
                            <li class="{{ request()->is('admin/ebook/buy-histories') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.ebook.buy.history') }}"
                                    class="{{ request()->is('admin/ebook/buy-histories') ? 'active' : '' }}">Buy
                                    Histories</a>
                            </li>
                        </ul>
                    </li>
                @endcan
                {{-- Transactions --}}
                @can('Manage Transactions')
                    <li
                        class="{{ request()->is('admin/payment*') || request()->is('admin/invoice*') || request()->is('admin/withdraw*') ? 'li-active' : '' }}">
                        <a href="javascript: void(0);"
                            class="{{ request()->is('admin/payment*') || request()->is('admin/invoice*') || request()->is('admin/withdraw*') ? 'active' : '' }}">
                            <i class="ri-currency-line"></i>
                            <span>Manage Transactions</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li class="{{ request()->is('admin/payment*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.payment.index') }}"
                                    class="{{ request()->is('admin/payment*') ? 'active' : '' }}">All Payments</a>
                            </li>
                            <li class="{{ request()->is('admin/invoice*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.invoice.index') }}"
                                    class="{{ request()->is('admin/invoice*') ? 'active' : '' }}">All Invoices</a>
                            </li>

                            <li class="{{ request()->is('admin/withdraw*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.withdraw.request') }}"
                                    class="{{ request()->is('admin/withdraw*') ? 'active' : '' }}">
                                    <span>Withdraw Requests</span>
                                </a>
                            </li>
                            <li class="{{ request()->is('admin/refund*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.refund.request') }}"
                                    class="{{ request()->is('admin/refund*') ? 'active' : '' }}">
                                    <span>Refund Requests</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                {{-- Playgrounds --}}
                @can('Manage Playground')
                    <li
                        class="{{ request()->is('admin/awsAccount*') || request()->is('admin/GcpProject*') || request()->is('admin/ubuntuSetting*') || request()->is('admin/playground*') ? 'li-active' : '' }}">
                        <a href="javascript: void(0);"
                            class="{{ request()->is('admin/awsAccount*') || request()->is('admin/GcpProject*') || request()->is('admin/ubuntuSetting*') || request()->is('admin/playground*') ? 'active' : '' }}"
                            class="{{ request()->is('admin/awsAccount*') || request()->is('admin/GcpProject*') || request()->is('admin/ubuntuSetting*') || request()->is('admin/playground*') ? 'active' : '' }}">
                            <i class="ri-terminal-box-fill"></i>
                            <span>Manage Playgrounds</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li class="{{ request()->is('admin/playground*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.playground.category.index') }}"
                                    class="{{ request()->is('admin/playground/category*') ? 'active' : '' }}">
                                    Categories</a>
                            </li>
                            <li class="{{ request()->is('admin/playground*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.playground.index') }}"
                                    class="{{ request()->is('admin/playground') ? 'active' : '' }}">Playgrounds
                                </a>
                            </li>
                            <li class="{{ request()->is('admin/playground*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.playground.setting') }}"
                                    class="{{ request()->is('admin/playground/setting*') ? 'active' : '' }}">
                                    Settings</a>
                            </li>
                            <li class="{{ request()->is('admin/playground*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.playground.configuration.index') }}"
                                    class="{{ request()->is('admin/playground/configuration*') ? 'active' : '' }}">
                                    Configurations</a>
                            </li>
                            <li class="{{ request()->is('admin/questions*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.playground.questions') }}"
                                    class="{{ request()->is('admin/questions*') ? 'active' : '' }}">Questions</a>
                            </li>
                            <li class="{{ request()->is('admin/awsAccount*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.awsAccount.index') }}"
                                    class="{{ request()->is('admin/awsAccount*') ? 'active' : '' }}">Aws Accounts</a>
                            </li>
                            <li class="{{ request()->is('admin/gcpProject*') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.gcpProject.index') }}"
                                    class="{{ request()->is('admin/gcpProject*') ? 'active' : '' }}">Gcp Projects</a>
                            </li>
                        </ul>
                    </li>
                @endcan

                {{-- Manage Ticket --}}
                @can('Manage Ticket')
                    <li class="{{ request()->is('admin/ticket*') ? 'li-active' : '' }}">
                        <a href="javascript: void(0);" class="{{ request()->is('admin/ticket*') ? 'active' : '' }}">
                            <i class="ri-home-smile-2-line"></i>
                            <span>Support Ticket</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li class="{{ request()->is('admin/ticket') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.ticket.index') }}"
                                    class="{{ request()->is('admin/ticket') ? 'active' : '' }}">All Ticket</a>
                            </li>
                            <li class="{{ request()->is('admin/faq/topics') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.faq.topics.index') }}"
                                    class="{{ request()->is('admin/faq/topics') ? 'active' : '' }}">Ticket Category</a>
                            </li>
                        </ul>

                    </li>
                @endcan
                {{-- certificates --}}
                @can('Manage Certificate')
                    <li class="{{ request()->is('admin/certificate*') ? 'li-active' : '' }}">
                        <a href="{{ route('admin.certificate') }}"
                            class="{{ request()->is('admin/certificate*') ? 'active' : '' }}">
                            <i class="ri-file-list-3-line"></i>
                            <span>Certitficate</span>
                        </a>
                    </li>
                @endcan

                {{-- Policy Settings  --}}
                @can('Manage PolicySettings')
                    <li class="{{ request()->is('admin/policy/settings*') ? 'li-active' : '' }}">
                        <a href="javascript: void(0);"
                            class="{{ request()->is('admin/policy/settings*') ? 'active' : '' }}">
                            <i class="ri-shield-keyhole-fill"></i>
                            <span>Policy Settings</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li>
                                <a href="{{ route('admin.policy.settings.privacy') }}">Privacy
                                    Policy</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.policy.settings.terms') }}">Terms
                                    Conditions</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.policy.settings.refund') }}">Refund
                                    Policy</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.policy.settings.cookie') }}">Cookie
                                    Policy</a>
                            </li>
                        </ul>
                    </li>
                @endcan

                @can('Manage Faq')
                    <li class="{{ request()->is('admin/faq') ? 'li-active' : '' }}">
                        <a href="{{ route('admin.faq.faqs.index') }}"
                            class="{{ request()->is('admin/faq') ? 'active' : '' }}">
                            <i class="ri-ball-pen-line"></i>
                            <span>Manage Faqs</span>
                        </a>
                    </li>
                @endcan


                @can('Manage Review')
                    <li class="{{ request()->is('admin/review') ? 'li-active' : '' }}">
                        <a href="{{ route('admin.review.index') }}"
                            class="{{ request()->is('admin/review') ? 'active' : '' }}">
                            <i class="ri-feedback-fill"></i>
                            <span>Manage Reviews</span>
                        </a>
                    </li>
                @endcan

                @can('Manage Comment')
                    <li class="{{ request()->is('admin/comment') ? 'li-active' : '' }}">
                        <a href="{{ route('admin.comment.index') }}"
                            class="{{ request()->is('admin/comment') ? 'active' : '' }}">
                            <i class="ri-feedback-fill"></i>
                            <span>Manage Comments</span>
                        </a>
                    </li>
                @endcan

                @can('Manage Announcement')
                    <li class="{{ request()->is('admin/announcement') ? 'li-active' : '' }}">
                        <a href="{{ route('admin.announcement.index') }}"
                            class="{{ request()->is('admin/announcement') ? 'active' : '' }}">
                            <i class="ri-article-line"></i>
                            <span>Announcements</span>
                        </a>
                    </li>
                @endcan

                @can('Manage Contact List')
                    <li class="{{ request()->is('admin/contact-us') ? 'li-active' : '' }}">
                        <a href="{{ route('admin.contact-us.index') }}"
                            class="{{ request()->is('admin/contact-us') ? 'active' : '' }}">
                            <i class="ri-customer-service-fill"></i>
                            <span>Conatct Us</span>
                        </a>
                    </li>
                @endcan
                @can('Manage Contact List')
                    <li class="{{ request()->is('admin/demo-books') ? 'li-active' : '' }}">
                        <a href="{{ route('admin.demo-books.index') }}"
                            class="{{ request()->is('admin/demo-books') ? 'active' : '' }}">
                            <i class="ri-questionnaire-line"></i>
                            <span>Demo Booking</span>
                        </a>
                    </li>
                @endcan

                {{-- settings --}}
                @can('Manage Settings')
                    <li class="{{ request()->is('admin/settings*') ? 'li-active' : '' }}">
                        <a href="javascript: void(0);" class="{{ request()->is('admin/settings*') ? 'active' : '' }}">
                            <i class="ri-settings-2-line"></i>
                            <span>Settings</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">

                            <li class="{{ request()->is('admin/settings') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.settings.index') }}"
                                    class="{{ request()->is('admin/settings') ? 'active' : '' }}">
                                    App Settings
                                </a>
                            </li>
                            <li class="{{ request()->is('admin/settings/cache') ? 'li-active' : '' }}">
                                <a href="{{ route('admin.settings.cache') }}"
                                    class="{{ request()->is('admin/settings/cache') ? 'active' : '' }}">
                                    Cache Settings
                                </a>
                            </li>

                        </ul>
                    </li>
                @endcan

            </ul>
            <ul class="list-unstyled">
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a onclick="event.preventDefault(); this.closest('form').submit();" class="waves-effect"
                            href="javascript:void(0)">
                            <i class="ri-logout-circle-r-line"></i>
                            <span>Logout</span>
                        </a>
                    </form>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
