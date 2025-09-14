@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ get_page_meta('title', true) }}</h4>
                    <form action="{{ route('teacher.exams.update', $item->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Exam Name <span class="error">*</span></label>
                            <input name="name" type="text" class="form-control" required="" placeholder="Name"
                                value="{{ $item->name ?? old('name') }}">
                            @error('name')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Exam Duration (in minutes)<span class="error">*</span></label>
                            <input name="duration" type="number" class="form-control" required="" placeholder="duration"
                                value="{{ $item->duration }}">
                            @error('duration')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Exam Type <span class="error">*</span></label>
                            <select class="form-control" name="exam_type" id="exam_type">
                                <option value="global" @if ($item->exam_type === 'global') selected @endif>Global</option>
                                <option value="course" @if ($item->exam_type === 'course') selected @endif>Course</option>
                            </select>
                            @error('exam_type')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="exam_for_box" id="exam_for_box"></div>

                        <div style="display: none">
                            <div class="" id="global_exam_question_box">
                                <div class="" id="global_exam_question_box_delete">
                                    <div class="add_item mb-3">
                                        <button id="addQusMore" type="button"
                                            class="btn btn-primary waves-effect waves-lightml-2 me-2">
                                            <i class="fa fa-plus"></i> Add Question
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="display: none">
                            <div class="mb-3" id="course_exam_question_box">
                                <div class="" id="course_exam_question_box_delete">
                                    <div class="mb-3">
                                        <label class="form-label">Select Course <span class="error">*</span></label>
                                        <select class="form-control" name="course_id" id="course_id">
                                            @foreach ($courses as $course)
                                                <option value="{{ $course->id }}"
                                                    @if ($item->course_id === $course->id) selected @endif>{{ $course->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('course_id')
                                            <p class="error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div id="exam_for_module_or_final_select_box_show"></div>
                                    <div style="display: none">
                                        <div class="" id="exam_for_module_or_final_box">
                                            <div class="exam_for_module_or_final_select_box_delete"
                                                id="exam_for_module_or_final_select_box_delete">
                                                <div class="mb-3">
                                                    <label class="form-label">Select Exam For <span
                                                            class="error">*</span></label>
                                                    <select class="form-control" name="exam_for" id="exam_for">
                                                        <option disabled>-- Select one --</option>
                                                        <option value="module"
                                                            @if ($item->exam_for === 'module') selected @endif>Module
                                                        </option>
                                                        <option value="final"
                                                            @if ($item->exam_for === 'final') selected @endif>Final</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="module_select_box_show"></div>

                                    <div style="display: none">
                                        <div class="" id="module_box">
                                            <div class="module_select_box_delete" id="module_select_box_delete">

                                                <div class="mb-3">
                                                    <label class="form-label">Select Module <span
                                                            class="error">*</span></label>
                                                    <select class="form-control" name="module_id" id="module_id">
                                                    </select>
                                                    @error('module_id')
                                                        <p class="error">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="display: none">
                                        <div class="" id="module_message_box">
                                            <div class="module_select_box_delete" id="module_select_box_delete">
                                                <div class="mb-3">
                                                    <p class="form-control">No module found</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        @foreach ($item->questions as $qus)
                            <div class="whole_extra_item_add mt-3" id="whole_extra_item_add">
                                <div class="delete_whole_extra_item_add mt-3" id="delete_whole_extra_item_add">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="mb-3">
                                                <label class="form-label"><strong>Question Title</strong></label>
                                                <input type="hidden" name="qus_id[]" value="{{ $qus->id }}">
                                                <input name="title[]" type="text" class="form-control mb-3"
                                                    required="" placeholder="Question Title"
                                                    value="{{ $qus->title ?? old('title') }}">
                                                <label class="form-label">Option A</label>
                                                <input name="opt_a[]" type="text" class="form-control mb-2"
                                                    required="" placeholder="Option A"
                                                    value="{{ $qus->opt_a ?? old('opt_a') }}">
                                                <label class="form-label">Option B</label>
                                                <input name="opt_b[]" type="text" class="form-control mb-2"
                                                    required="" placeholder="Option B"
                                                    value="{{ $qus->opt_b ?? old('opt_b') }}">
                                                <label class="form-label">Option C</label>
                                                <input name="opt_c[]" type="text" class="form-control mb-2"
                                                    required="" placeholder="Option C"
                                                    value="{{ $qus->opt_c ?? old('opt_c') }}">
                                                <label class="form-label">Option D</label>
                                                <input name="opt_d[]" type="text" class="form-control mb-2"
                                                    required="" placeholder="Option D"
                                                    value="{{ $qus->opt_d ?? old('opt_d') }}">
                                                <label class="form-label">Select Answer</label>
                                                <select class="form-control" name="answer[]">
                                                    <option value="a"
                                                        @if ($qus->answer === 'a') selected @endif>A</option>
                                                    <option value="b"
                                                        @if ($qus->answer === 'b') selected @endif>B</option>
                                                    <option value="c"
                                                        @if ($qus->answer === 'c') selected @endif>C</option>
                                                    <option value="d"
                                                        @if ($qus->answer === 'd') selected @endif>D</option>
                                                </select>
                                                @error('exam_type')
                                                    <p class="error">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <button type="button" class="btn btn-primary waves-effect removeQusMore">
                                                <i class="fa fa-times"></i> Remove
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="mb-3">
                            <label class="form-label mb-2 w-100">Status <span class="error">*</span></label>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="status_yes" name="status" class="form-check-input"
                                    value="{{ ACTIVE }}" name="status" class="custom-control-input"
                                    @if (ACTIVE == $item->status) checked @endif>
                                <label class="custom-control-label" for="status_yes">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="status_no" name="status" class="form-check-input"
                                    value="{{ INACTIVE }}" name="status" class="custom-control-input"
                                    @if (INACTIVE == $item->status) checked @endif>
                                <label class="custom-control-label" for="status_no">Inactive</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div>
                                <button class="btn btn-primary waves-effect waves-lightml-2 me-2" type="submit">
                                    <i class="fa fa-save"></i> Submit
                                </button>

                                {{-- @can('All Exams') --}}
                                <a class="btn btn-secondary waves-effect" href="{{ route('teacher.exams.index') }}">
                                    <i class="fa fa-times"></i> Cancel
                                </a>
                                {{-- @endcan --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <div style="display: none">
        <div class="whole_extra_ques_item_add mt-3" id="whole_extra_ques_item_add">
            <div class="delete_whole_extra_item_add mt-3" id="delete_whole_extra_item_add">
                <div class="row">
                    <div class="col-9">
                        <div class="mb-3">
                            <label class="form-label"><strong>Question Title</strong></label>
                            <input type="hidden" name="qus_id[]" value="null">
                            <input name="title[]" type="text" class="form-control mb-3" required=""
                                placeholder="Question Title" value="{{ old('title') }}">
                            <label class="form-label">Option A</label>
                            <input name="opt_a[]" type="text" class="form-control mb-2" required=""
                                placeholder="Enter Option A" value="{{ old('opt_a') }}">
                            <label class="form-label">Option B</label>
                            <input name="opt_b[]" type="text" class="form-control mb-2" required=""
                                placeholder="Enter Option B" value="{{ old('opt_b') }}">
                            <label class="form-label">Option C</label>
                            <input name="opt_c[]" type="text" class="form-control mb-2" required=""
                                placeholder="Enter Option C" value="{{ old('opt_c') }}">
                            <label class="form-label">Option D</label>
                            <input name="opt_d[]" type="text" class="form-control mb-2" required=""
                                placeholder="Enter Option D" value="{{ old('opt_d') }}">
                            <label class="form-label">Select Answer</label>
                            <select class="form-control" name="answer[]">
                                <option selected disabled>Select Answer</option>
                                <option value="a">A</option>
                                <option value="b">B</option>
                                <option value="c">C</option>
                                <option value="d">D</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <button type="button" class="btn btn-primary waves-effect removeQusMore">
                            <i class="fa fa-times"></i> Remove
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            var global_exam_question_box = $("#global_exam_question_box").html();
            var course_exam_question_box = $("#course_exam_question_box").html();
            var module_box = $("#module_box").html();
            var module_message_box = $("#module_message_box").html();
            var exam_for_module_or_final_box = $("#exam_for_module_or_final_box").html();
            var course_id = null;

            //get initial value of select exam for
            var exam_type = $('#exam_type').find(":selected").val();

            if (exam_type === 'global') {
                $('#exam_for_box').append(global_exam_question_box);
                $('#course_exam_question_box_delete').remove();
            }
            if (exam_type === 'course') {
                course_id = $('#course_id').find(":selected").val();
                $('#exam_for_box').append(course_exam_question_box);
                $('#global_exam_question_box_delete').remove();


                $('#exam_for_module_or_final_select_box_delete').remove();
                $('#exam_for_module_or_final_select_box_show').append(exam_for_module_or_final_box);

                $('#module_select_box_delete').remove();
            }

            var exam_for = $('#exam_for').find(":selected").val();
            if (exam_for === 'final') {
                $('#module_select_box_delete').remove();
                //$('#module_select_box_show').append(module_message_box);

                $('#global_exam_question_box_delete').remove();
                $('#exam_for_box').append(global_exam_question_box);
            }
            if (exam_for === 'module') {
                var item_module_id = '{{ $item->module_id }}';
                if (course_id != null) {
                    $.ajax({
                        type: 'get',
                        url: '/teacher/exams/get/all/modules',
                        data: {
                            'course_id': course_id
                        },
                        dataType: 'json', //return data will be json
                        success: function(data) {
                            $('#module_select_box_delete').remove();
                            $('#module_select_box_show').append(module_box);
                            var module_id = $('#module_id');
                            if (data.length > 0) {
                                $('#global_exam_question_box_delete').remove();
                                var select = '<option disabled>--Select module--</option>';
                                data.forEach(function(row) {
                                    select += '<option  value="' + row.id + '" ' + (
                                            item_module_id == row.id ? 'selected' : '') + '>' +
                                        row.title + '</option>';
                                });
                                module_id.html(select);

                                var selected_module_id = $('#module_id').find(":selected").val();
                                if (selected_module_id != null) {
                                    //append add question button
                                    $('#global_exam_question_box_delete').remove();
                                    $('#exam_for_box').append(global_exam_question_box);
                                }

                            } else {
                                $('#module_select_box_delete').remove();
                                $('#module_select_box_show').append(module_message_box);

                                $('#global_exam_question_box_delete').remove();
                                $('#exam_for_box').append(global_exam_question_box);

                            }

                        },
                        error: function() {
                            console.log('Course module data fetching error')
                        }
                    });
                }
            }




            //select exam for
            $("#exam_type").change(function() {
                var exam_type = $(this).children("option:selected").val();

                if (exam_type === 'global') {
                    $('#exam_for_box').append(global_exam_question_box);
                    $('#course_exam_question_box_delete').remove();
                }
                if (exam_type === 'course') {
                    $('#exam_for_box').append(course_exam_question_box);
                    $('#global_exam_question_box_delete').remove();
                }
            });

            $(document).on('change', '#course_id', function() {
                course_id = $('#course_id').find(":selected").val();
                $('#exam_for_module_or_final_select_box_delete').remove();
                $('#exam_for_module_or_final_select_box_show').append(exam_for_module_or_final_box);

                $('#module_select_box_delete').remove();
                //$('#module_select_box_show').append(module_message_box);
            });

            $(document).on('change', '#exam_for', function() {

                var exam_for = $('#exam_for').find(":selected").val();
                if (exam_for === 'final') {
                    $('#module_select_box_delete').remove();
                    //$('#module_select_box_show').append(module_message_box);

                    $('#global_exam_question_box_delete').remove();
                    $('#exam_for_box').append(global_exam_question_box);
                }
                if (exam_for === 'module') {
                    if (course_id != null) {
                        $.ajax({
                            type: 'get',
                            url: '/teacher/exams/get/all/modules',
                            data: {
                                'course_id': course_id
                            },
                            dataType: 'json', //return data will be json
                            success: function(data) {
                                $('#module_select_box_delete').remove();
                                $('#module_select_box_show').append(module_box);
                                var module_id = $('#module_id');
                                if (data.length > 0) {
                                    $('#global_exam_question_box_delete').remove();
                                    var select = '<option disabled>--Select module--</option>';
                                    data.forEach(function(row) {
                                        select += '<option value="' + row.id + '">' +
                                            row.title + '</option>';
                                    });
                                    module_id.html(select);
                                } else {
                                    $('#module_select_box_delete').remove();
                                    $('#module_select_box_show').append(module_message_box);

                                    $('#global_exam_question_box_delete').remove();
                                    $('#exam_for_box').append(global_exam_question_box);

                                }

                            },
                            error: function() {
                                console.log('Course module data fetching error')
                            }
                        });
                    }
                }

            });

            $(document).on('change', '#module_id', function() {
                var module_id = $('#module_id').find(":selected").val();

                console.log(module_id)
                if (module_id != null) {
                    //append add question button
                    $('#global_exam_question_box_delete').remove();
                    $('#exam_for_box').append(global_exam_question_box);
                }

            });

            var counter = '{{ $item->questions->count() }}';
            console.log(counter)
            if (counter <= 1) {
                $('.removeQusMore').attr('disabled', 'disabled')
            } else {
                $('.removeQusMore').removeAttr('disabled', 'disabled')
            }
            $(document).on('click', '#addQusMore', function() {
                var whole_extra_ques_item_add = $("#whole_extra_ques_item_add").html();
                $(this).closest(".add_item").append(whole_extra_ques_item_add);
                counter++;
                console.log(counter)
                if (counter <= 1) {
                    $('.removeQusMore').attr('disabled', 'disabled')
                } else {
                    $('.removeQusMore').removeAttr('disabled', 'disabled')
                }
            })

            $(document).on('click', '.removeQusMore', function(event) {
                $(this).closest(".delete_whole_extra_item_add").remove();
                counter -= 1;
                console.log(counter)
                if (counter <= 1) {
                    $('.removeQusMore').attr('disabled', 'disabled')
                } else {
                    $('.removeQusMore').removeAttr('disabled', 'disabled')
                }
            })
        });
    </script>
@endpush
