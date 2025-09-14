<?php

namespace App\Http\Controllers\Design;

use App\Http\Controllers\Controller;

class NewDesignController extends Controller
{
    public function index()
    {
        return view('new-design.index');
    }

    public function videoCourse()
    {
        return view('new-design.video-course-content');
    }

    public function studentDashboard()
    {
        return view('new-design.student-dashboard');
    }

    public function profileSetting()
    {
        return view('new-design.student-profile-setting');
    }

    public function studentMyCourse()
    {
        return view('new-design.student-my-course');
    }

    public function myCertificate()
    {
        return view('new-design.my-certificates');
    }

    public function purchaseHistory()
    {
        return view('new-design.purchase-history');
    }

    public function business()
    {
        return view('new-design.business');
    }

    public function courseDetails()
    {
        return view('v1.course-details');
    }

    public function newbootcampList()
    {
        return view('v1.bootcamp-list');
    }

    public function bootcampDetails()
    {
        return view('new-design.bootcamps-details');
    }

    public function cart()
    {
        return view('new-design.cart');
    }

    public function billing()
    {
        return view('new-design.billing');
    }

    public function allPlayground()
    {
        return view('new-design.all-playground');
    }

    public function blogDetails()
    {
        return view('new-design.blog-details');
    }

    public function eBook()
    {
        return view('v1.e-book');
    }

    public function eBookDetails()
    {
        return view('v1.e-book-details');
    }

    public function reserveOrder()
    {
        return view('new-design.reserve-order');
    }

    public function createExam()
    {
        return view('new-design.create-your-exams');
    }

    public function onlineBootcamp()
    {
        return view('new-design.online-bootcamp');
    }

    public function blogList()
    {
        return view('new-design.blog-list');
    }

    public function blogGrid()
    {
        return view('new-design.blog-grid');
    }

    public function coachingDetails()
    {
        return view('new-design.coaching-details');
    }

    public function wallet()
    {
        return view('new-design.wallet');
    }

    public function beneficiary()
    {
        return view('new-design.beneficiary');
    }

    public function teacherDashboard()
    {
        return view('new-design.teacher-dashboard');
    }

    public function teacherCourseCreate()
    {
        return view('new-design.teacher-course-create');
    }

    public function coachSchedule()
    {
        return view('new-design.coach-schedule');
    }

    public function coachList()
    {
        return view('v1.coaches-list');
    }

    public function bootcampOverview()
    {
        return view('v1.bootcamp-overview');
    }

    public function courseSingle()
    {
        return view('v1.course-single-page');
    }

    public function allExam()
    {
        return view('v1.all-exam-test');
    }

    public function createBecome()
    {
        return view('v1.create-become-teacher');
    }

    public function newCoachSinglePage()
    {
        return view('v1.coaches-single');
    }

    public function BlogPage()
    {
        return view('v1.blog-list');
    }

    public function wikiList()
    {
        return view('v1.blog-list');
    }

    public function EventPage()
    {
        return view('v1.up-coming-event');
    }

    public function wikiDetails()
    {
        return view('v1.wiki-details');
    }

    public function wikiDetailsList()
    {
        return view('v1.wiki-details-list');
    }

    public function blogListDetails()
    {
        return view('v1.blog-details');
    }

    public function teacherCreateExam()
    {
        return view('new-design.teacher-create-exam');
    }

    public function teacherAddExam()
    {
        return view('new-design.teacher-add-exam');
    }

    public function createQuestion()
    {
        return view('new-design.create-question');
    }

    public function supportTicket()
    {
        return view('new-design.student-support-ticket');
    }

    public function supportTicketList()
    {
        return view('new-design.student-support-ticket-list');
    }

    public function supportTicketDetails()
    {
        return view('new-design.student-support-ticket-details');
    }

    public function notFound()
    {
        return view('new-design.not-found');
    }

    public function teacherAllCourse()
    {
        return view('new-design.teacher-all-course');
    }

    public function studentBootcamp()
    {
        return view('new-design.student-bootcamp');
    }

    public function myBootcamps()
    {
        return view('v1.my-bootcamps');
    }

    public function mySession()
    {
        return view('v1.my-session');
    }

    public function myExam()
    {
        return view('v1.my-exam');
    }

    public function examSingle()
    {
        return view('v1.exam-single');
    }

    public function myBook()
    {
        return view('v1.my-book');
    }

    public function enrollCoachList()
    {
        return view('v1.enroll1-coach-list');
    }

    public function studentActivities()
    {
        return view('new-design.student-activities');
    }

    public function teacherCourse()
    {
        return view('v1.teacher-course');
    }

    public function teacherBootcamp()
    {
        return view('v1.teacher-bootcamp');
    }

    public function helpCenter()
    {
        return view('v1.help-center');
    }

    public function eventDetails()
    {
        return view('v1.event-details');
    }

    public function playgroundDetails()
    {
        return view('v1.playground-details');
    }

    public function helpCenterQuestion()
    {
        return view('v1.help-center-question');
    }

    public function helpCenterRequest()
    {
        return view('v1.help-center-request-form');
    }

    public function protectedExam()
    {
        return view('v1.protected-exam');
    }

    public function protectedExamIntroduction()
    {
        return view('v1.protected-exam-introduction');
    }

    public function protectedExamStart()
    {
        return view('v1.protected-exam-start');
    }

    public function protectedExamScore()
    {
        return view('v1.protected-score');
    }

    public function organization()
    {
        return view('v1.organization');
    }

    public function createEbook()
    {
        return view('new-design.create-ebook');
    }

    public function studentEbook()
    {
        return view('new-design.student-ebook');
    }

    public function singleCoach()
    {
        return view('v1.coach-single');
    }

    public function notification()
    {
        return view('v1.notification');
    }

    public function announcement()
    {
        return view('v1.announcement');
    }

    public function studentExam()
    {
        return view('new-design.student-exam');
    }

    public function studentResult()
    {
        return view('new-design.student-result');
    }

    public function studentAllExam()
    {
        return view('new-design.student-all-exam');
    }

    public function allStudentEnrole()
    {
        return view('new-design.all-student-enrole');
    }

    public function privacyPolicy()
    {
        return view('v1.privacy-policy');
    }

    public function termsCondition()
    {
        return view('v1.terms-condition');
    }

    public function certificate()
    {
        return view('v1.certificate');
    }

    public function studentChat()
    {
        return view('v1.chat');
    }
}
