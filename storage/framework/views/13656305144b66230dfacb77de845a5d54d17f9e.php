<div class="leftbar sidebar-two" style="background-image: url('images/navbar.png')">
    <!-- Start Sidebar -->
    <div class="sidebar">
        <!-- Start Navigationbar -->

        <div class="navigationbar">

            <div class="vertical-menu-detail">

                <div class="tab-content" id="v-pills-tabContent">

                    <div class="tab-pane fade active show" id="v-pills-dashboard" role="tabpanel"
                        aria-labelledby="v-pills-dashboard">
                        <?php if(Auth::User()->role == "instructor"): ?>
                        <ul class="vertical-menu">
                            <div class="logobar">
                                <a href="<?php echo e(url('/')); ?>" class="logo logo-large">
                                    <img style="object-fit:scale-down;" src="<?php echo e(url('images/logo/'.$gsetting->footer_logo)); ?>"
                                        class="img-fluid" alt="logo">
                                </a>
                            </div>


                            <li class="<?php echo e(Nav::isRoute('instructor.index')); ?>">
                                <a class="nav-link" href="<?php echo e(route('instructor.index')); ?>">
                                    <i class="feather icon-box text-secondary"></i>
                                    <span><?php echo e(__('Dashboard')); ?></span>
                                </a>
                            </li>
                            <!-- dashboard end -->
                            <li class="header header-one"><?php echo e(__('Education')); ?></li>

                            <!-- Course start  -->
                            <li class="<?php echo e(Nav::isResource('category')); ?> <?php echo e(Nav::isResource('subcategory')); ?> <?php echo e(Nav::isResource('childcategory')); ?> <?php echo e(Nav::isResource('course')); ?> <?php echo e(Nav::isResource('courselang')); ?>">
                                <a href="javaScript:void();" class="menu"><i class="feather icon-book text-secondary"></i>
                                    <span><?php echo e(__('Course')); ?><div class="sub-menu truncate"><?php echo e(__('Categories, Courses, Rejected Courses, Courses Language, Assignment Quiz Review')); ?></div></span>
                                    <i class="feather icon-chevron-right"></i>
                                </a>
                                <ul class="vertical-submenu">

                                    <li
                                        class="<?php echo e(Nav::isResource('category')); ?> <?php echo e(Nav::isResource('subcategory')); ?> <?php echo e(Nav::isResource('childcategory')); ?> <?php echo e(Nav::isResource('course')); ?> <?php echo e(Nav::isResource('courselang')); ?> <?php echo e(Nav::isRoute('assignment.view')); ?>">
                                        <?php if($gsetting->cat_enable == 1): ?>
                                        <a href="javaScript:void();">
                                            <span><?php echo e(__('Category')); ?></span><i
                                                class="feather icon-chevron-right"></i>
                                        </a>
                                        <ul class="vertical-submenu">

                                            <li class="<?php echo e(Nav::isResource('category')); ?>">
                                                <a href="<?php echo e(url('category')); ?>"><?php echo e(__('Category')); ?></a>
                                            </li>

                                            <li class="<?php echo e(Nav::isResource('subcategory')); ?>">
                                                <a
                                                    href="<?php echo e(url('subcategory')); ?>"><?php echo e(__('SubCategory')); ?></a>
                                            </li>

                                            <li class="<?php echo e(Nav::isResource('childcategory')); ?>">
                                                <a
                                                    href="<?php echo e(url('childcategory')); ?>"><?php echo e(__('ChildCategory')); ?></a>
                                            </li>

                                        </ul>
                                        <?php endif; ?>
                                    </li>
                                    <li class="<?php echo e(Nav::isResource('course')); ?>">
                                        <a href="<?php echo e(url('course')); ?>"><?php echo e(__('Course')); ?></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isRoute('courses.reject')); ?>">
                                        <a
                                            href="<?php echo e(route('courses.reject')); ?>"><?php echo e(__('RejectedCourses')); ?></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isRoute('courses.reject')); ?>">
                                        <a
                                            href="<?php echo e(route('courses.reject')); ?>"><?php echo e(__('Modified RejectedCourses')); ?></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isResource('courselang')); ?>">
                                        <a href="<?php echo e(url('courselang')); ?>"><?php echo e(__('Course')); ?>

                                            <?php echo e(__('Language')); ?></a>
                                    </li>
                                    <?php if($gsetting->assignment_enable == 1): ?>
                                    <li class="<?php echo e(Nav::isRoute('assignment.view')); ?>">
                                        <a
                                            href="<?php echo e(route('assignment.view')); ?>"><?php echo e(__('Assignment')); ?></a>
                                    </li>
                                    <?php endif; ?>

                                    <li class="<?php echo e(Nav::isRoute('quiz.review')); ?>"><a
                                            href="<?php echo e(route('quiz.review')); ?>"><span><?php echo e(__('QuizReview')); ?></span></a>
                                    </li>
                                </ul>
                            </li>

                            <!-- meeeting start  -->
                            <li class="<?php echo e(Nav::isRoute('meeting.create')); ?> <?php echo e(Nav::isRoute('zoom.show')); ?> <?php echo e(Nav::isRoute('zoom.edit')); ?> <?php echo e(Nav::isRoute('zoom.setting')); ?> <?php echo e(Nav::isRoute('zoom.index')); ?> <?php echo e(Nav::isRoute('bbl.setting')); ?> <?php echo e(Nav::isRoute('bbl.all.meeting')); ?> <?php echo e(Nav::isRoute('download.meeting')); ?> <?php echo e(Nav::isRoute('googlemeet.setting')); ?> <?php echo e(Nav::isRoute('googlemeet.index')); ?> <?php echo e(Nav::isRoute('googlemeet.allgooglemeeting')); ?> <?php echo e(Nav::isRoute('jitsi.dashboard')); ?> <?php echo e(Nav::isRoute('jitsi.create')); ?> <?php echo e(Nav::isResource('meeting-recordings')); ?>">
                                <a href="javaScript:void();" class="menu"><i class="fa fa-podcast text-secondary"></i>
                                    <span><?php echo e(__('Meetings')); ?><div class="sub-menu truncate"><?php echo e(__('Zoom Live Meetings, Big Blue Meetings, Google Meet Meeting, Jitsi Meeting')); ?></div></span>
                                    <i class="feather icon-chevron-right"></i>
                                </a>
                                <?php if(isset($zoom_enable) && $zoom_enable == 1): ?>
                                <ul class="vertical-submenu">

                                    <li
                                        class="<?php echo e(Nav::isRoute('meeting.create')); ?> <?php echo e(Nav::isRoute('zoom.show')); ?> <?php echo e(Nav::isRoute('zoom.edit')); ?> <?php echo e(Nav::isRoute('zoom.setting')); ?> <?php echo e(Nav::isRoute('zoom.index')); ?>">
                                        <a href="javaScript:void();">
                                            <i class=""></i> <span><?php echo e(__('ZoomLiveMeetings')); ?></span><i
                                                class="feather icon-chevron-right"></i>
                                        </a>
                                        <ul class="vertical-submenu">

                                            <li class="<?php echo e(Nav::isRoute('zoom.setting')); ?>">
                                                <a
                                                    href="<?php echo e(route('zoom.setting')); ?>"><?php echo e(__('ZoomSettings')); ?></a>
                                            </li>

                                            <li
                                                class="<?php echo e(Nav::isRoute('zoom.index')); ?> <?php echo e(Nav::isRoute('zoom.show')); ?> <?php echo e(Nav::isRoute('zoom.edit')); ?> <?php echo e(Nav::isRoute('meeting.create')); ?>">
                                                <a
                                                    href="<?php echo e(route('zoom.index')); ?>"><?php echo e(__('ZoomDashboard')); ?></a>
                                            </li>

                                        </ul>
                                    </li>

                                </ul>
                                <?php endif; ?>
                                <!-- ======= bbl_enable start =============== -->
                                <?php if(isset($gsetting) && $gsetting->bbl_enable == 1): ?>
                                <ul class="vertical-submenu">

                                    <li
                                        class="<?php echo e(Nav::isRoute('bbl.setting')); ?> <?php echo e(Nav::isRoute('bbl.all.meeting')); ?> <?php echo e(Nav::isRoute('download.meeting')); ?>">
                                        <a href="javaScript:void();">
                                            <i class=""></i> <span><?php echo e(__('BigBlueMeetings')); ?></span><i
                                                class="feather icon-chevron-right"></i>
                                        </a>
                                        <ul class="vertical-submenu">
                                            <li class="<?php echo e(Nav::isRoute('bbl.all.meeting')); ?>">
                                                <a
                                                    href="<?php echo e(route('bbl.all.meeting')); ?>"><?php echo e(__('ListMeetings')); ?></a>
                                            </li>
                                            <li class="<?php echo e(Nav::isRoute('download.meeting')); ?>">
                                                <a
                                                    href="<?php echo e(route('download.meeting')); ?>"><?php echo e(__('MeetingRecordings')); ?></a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                                <?php endif; ?>
                                <!-- ======= bbl_enable end ================= -->
                                <!-- ======= googlemmet start =============== -->
                                <?php if(isset($gsetting) && $gsetting->googlemeet_enable == 1): ?>
                                <ul class="vertical-submenu">

                                    <li
                                        class="<?php echo e(Nav::isRoute('googlemeet.setting')); ?> <?php echo e(Nav::isRoute('googlemeet.index')); ?> <?php echo e(Nav::isRoute('googlemeet.allgooglemeeting')); ?>">
                                        <a href="javaScript:void();">
                                            <i class=""></i> <span><?php echo e(__('Google Meet Meeting')); ?></span><i
                                                class="feather icon-chevron-right"></i>
                                        </a>
                                        <ul class="vertical-submenu">

                                            <li class="<?php echo e(Nav::isRoute('googlemeet.setting')); ?>">
                                                <a
                                                    href="<?php echo e(route('googlemeet.setting')); ?>"><?php echo e(__('Google Meet Settings')); ?></a>
                                            </li>
                                            <li class="<?php echo e(Nav::isRoute('googlemeet.index')); ?>">
                                                <a
                                                    href="<?php echo e(route('googlemeet.index')); ?>"><?php echo e(__('Google Meet Dashboard')); ?></a>
                                            </li>
                                            <li class="<?php echo e(Nav::isRoute('googlemeet.allgooglemeeting')); ?>">
                                                <a
                                                    href="<?php echo e(route('googlemeet.allgooglemeeting')); ?>"><?php echo e(__('AllMeetings')); ?></a>
                                            </li>

                                        </ul>
                                    </li>

                                </ul>
                                <?php endif; ?>
                                <!-- ======= googlemeet end ================= -->

                                <!-- ======= jisti start =============== -->
                                <?php if(isset($gsetting) && $gsetting->jitsimeet_enable == 1): ?>
                                <ul class="vertical-submenu">

                                    <li class="<?php echo e(Nav::isRoute('jitsi.dashboard')); ?> <?php echo e(Nav::isRoute('jitsi.create')); ?>">
                                        <a href="javaScript:void();">
                                            <i class=""></i> <span><?php echo e(__('Jitsi Meeting')); ?></span><i
                                                class="feather icon-chevron-right"></i>
                                        </a>
                                        <ul class="vertical-submenu">

                                            <li class="<?php echo e(Nav::isRoute('jitsi.dashboard')); ?>">
                                                <a href="<?php echo e(route('jitsi.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a>
                                            </li>

                                        </ul>
                                    </li>

                                </ul>
                                <?php endif; ?>
                            </li>

                            <!-- meeeting end -->
                            <li><a href="<?php echo e(url('institute')); ?>" class="menu"><i
                                        class="feather icon-grid text-secondary"></i><span><?php echo e(__('Institute')); ?></span></a>
                            </li>
                            <!-- Course end -->

                            <!-- featurecourse start -->
                            <?php if(isset($gsetting->feature_amount)): ?>
                            <li class="<?php echo e(Nav::isResource('featurecourse')); ?>">
                                <a href="<?php echo e(url('featurecourse')); ?>" class="menu">
                                    <i class="feather icon-phone-forwarded text-secondary"></i><span><?php echo e(__('Featured')); ?>

                                        <?php echo e(__('Course')); ?></span>
                                </a>
                            </li>
                            <?php endif; ?>


                            <!-- MultipleInstructor start  -->
                            <li class="<?php echo e(Nav::isRoute('allrequestinvolve')); ?> <?php echo e(Nav::isRoute('involve.request.index')); ?> <?php echo e(Nav::isRoute('involve.request')); ?>">
                                <a href="javaScript:void();" class="menu"><i class="feather icon-users text-secondary"></i>
                                    <span><?php echo e(__('MultipleInstructor')); ?><div class="sub-menu truncate"><?php echo e(__('Request To Involve, Involvement Requests, Involved In Course')); ?></div></span>
                                    <i class="feather icon-chevron-right"></i>
                                </a>
                                <ul class="vertical-submenu">

                                    <li>
                                        <a class="<?php echo e(Nav::isRoute('allrequestinvolve')); ?>"
                                            href="<?php echo e(route('allrequestinvolve')); ?>"><?php echo e(__('RequestToInvolve')); ?></a>
                                    </li>
                                    <li>
                                        <a class="<?php echo e(Nav::isRoute('involve.request.index')); ?>"
                                            href="<?php echo e(route('involve.request.index')); ?>"><?php echo e(__('InvolvementRequests')); ?></a>
                                    </li>
                                    <li>
                                        <a class="<?php echo e(Nav::isRoute('involve.request')); ?>"
                                            href="<?php echo e(route('involve.request')); ?>"><?php echo e(__('InvolvedInCourse')); ?></a>
                                    </li>

                                </ul>
                            </li>
                            <!-- Question & Answer start  -->
                            <li class="<?php echo e(Nav::isResource('instructorquestion')); ?> <?php echo e(Nav::isResource('instructoranswer')); ?>">
                                <a href="javaScript:void();" class="menu"><i class="feather icon-help-circle text-secondary"></i>
                                    <span><?php echo e(__('Question')); ?>

                                        / <?php echo e(__('Answer')); ?><div class="sub-menu truncate"><?php echo e(__('Question, Answer')); ?></div></span>
                                    <i class="feather icon-chevron-right"></i>
                                </a>
                                <ul class="vertical-submenu">

                                    <li class="<?php echo e(Nav::isResource('instructorquestion')); ?>">
                                        <a href="<?php echo e(url('instructorquestion')); ?>"><?php echo e(__('Question')); ?></a>
                                    </li>

                                    <li class="<?php echo e(Nav::isResource('instructoranswer')); ?>">
                                        <a href="<?php echo e(url('instructoranswer')); ?>"><?php echo e(__('Answer')); ?></a>
                                    </li>

                                </ul>
                            </li>
                            <!-- Question & Answer end -->
                            <!-- MultipleInstructor end -->
                            <li class="header"><?php echo e(__('Financial')); ?></li>

                            <!-- userenroll start -->
                            <li class="<?php echo e(Nav::isResource('userenroll')); ?>">
                                <a href="<?php echo e(url('userenroll')); ?>">
                                    <i class="feather icon-users text-secondary"></i><span><?php echo e(__('User')); ?>

                                        <?php echo e(__('Enrolled')); ?></span>
                                </a>
                            </li>
                            <!-- userenroll end -->




                            <li class="header"><?php echo e(__('Content')); ?></li>
                            <?php if(Module::has('Chatboard') && Module::find('Chatboard')->isEnabled()): ?>
                            <?php echo $__env->make('chatboard::front.icon', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endif; ?>
                            <!-- Announcement start -->
                            <li class="<?php echo e(Nav::isResource('instructor/announcement')); ?>">
                                <a href="<?php echo e(url('instructor/announcement')); ?>" class="menu">
                                    <i
                                        class="feather icon-volume-1 text-secondary"></i><span><?php echo e(__('Announcement')); ?></span>
                                </a>
                            </li>
                            <!-- Announcement end -->
                            <!-- featurecourse end -->
                           
                            <!-- blog start -->
                            <li class="<?php echo e(Nav::isResource('blog')); ?>">
                                <a  href="<?php echo e(url('blog')); ?>" class="menu">
                                    <i
                                        class="feather icon-book text-secondary"></i><span><?php echo e(__('Blog')); ?></span>
                                </a>
                            </li>
                            <!-- blog end -->




                            <li class="header"><?php echo e(__('Reports')); ?></li>

                            <!-- revenue start  -->
                            <li class="<?php echo e(Nav::isResource('pending.payout')); ?> <?php echo e(Nav::isRoute('admin.completed')); ?>">
                                <a href="javaScript:void();" class="menu"><i class="feather icon-dollar-sign text-secondary"></i>
                                    <span><?php echo e(__('MyRevenue')); ?><div class="sub-menu truncate"><?php echo e(__('Pending Payout, Completed Payout')); ?></div></span>
                                    <i class="feather icon-chevron-right"></i>
                                </a>
                                <ul class="vertical-submenu">

                                    <li class="<?php echo e(Nav::isResource('pending.payout')); ?>">
                                        <a href="<?php echo e(route('pending.payout')); ?>"><?php echo e(__('PendingPayout')); ?></a>
                                    </li>

                                    <li class="<?php echo e(Nav::isRoute('admin.completed')); ?>">
                                        <a
                                            href="<?php echo e(route('admin.completed')); ?>"><?php echo e(__('CompletedPayout')); ?></a>
                                    </li>

                                </ul>
                            </li>
                            <!-- revenue end -->
                            <!-- report start  -->
                            <li class="<?php echo e(url('show/progress/report')); ?> <?php echo e(Nav::isResource('show/quiz/report')); ?>">
                                <a href="javaScript:void();" class="menu"><i class="feather icon-file-text text-secondary"></i>
                                    <span><?php echo e(__('Report')); ?><div class="sub-menu truncate"><?php echo e(__('Quiz Report, Progress Report')); ?></div></span>
                                    <i class="feather icon-chevron-right"></i>
                                </a>
                                <ul class="vertical-submenu">

                                    <li class="<?php echo e(Nav::isResource('show/quiz/report')); ?>">
                                        <a href="<?php echo e(url('show/quiz/report')); ?>"> Quiz <?php echo e(__('Report')); ?></a>
                                    </li>
                                    <li class="<?php echo e(Nav::isResource('show/progress/report')); ?>">
                                        <a href="<?php echo e(url('show/progress/report')); ?>">
                                            Progress<?php echo e(__('Report')); ?></a>
                                    </li>


                                </ul>
                            </li>
                            <!-- report end -->
                            <li class="header"><?php echo e(__('Settings')); ?></li>
                            <!-- PayoutSettings start -->
                            <?php if(isset($isetting)): ?>
                        
                            <li class="<?php echo e(Nav::isResource('instructor.pay')); ?>">
                                <a href="<?php echo e(route('instructor.pay')); ?>" class="menu">
                                    <i
                                        class="feather icon-settings text-secondary"></i><span><?php echo e(__('PayoutSettings')); ?></span>
                                </a>
                            </li>
                            <?php endif; ?>
                            <!-- PayoutSettings end -->

                            <!-- Vacation Enable start -->
                            <li class="<?php echo e(Nav::isResource('vacation.view')); ?>">
                                <a href="<?php echo e(route('vacation.view')); ?>" class="menu">
                                    <i
                                        class="feather icon-toggle-left text-secondary"></i><span><?php echo e(__('Vacation Enable')); ?></span>
                                </a>
                            </li>
                            <!-- Vacation Enable end -->

                        </ul>
                        <?php endif; ?>
                    </div>

                </div>

            </div>
        </div>
        <!-- End Navigationbar -->
    </div>
    <!-- End Sidebar -->
</div><?php /**PATH C:\laragon\www\eclass\resources\views/admin/layouts/instructor_sidebar.blade.php ENDPATH**/ ?>