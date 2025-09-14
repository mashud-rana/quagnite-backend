@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3"></h4>
                    <div id='calendar'></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid/main.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid/main.css" rel="stylesheet" />
@endpush

@push('scripts')
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const calendarEl = document.getElementById('calendar');
            const calendar = new FullCalendar.Calendar(calendarEl, {
                height: 650,
                initialView: 'timeGridWeek',
                slotMinTime: '8:00:00',
                slotMaxTime: '19:00:00',
                events: @json($events),
                headerToolbar: {
                    left: 'prev,next today createEventBtn',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                customButtons: {
                    createEventBtn: {
                        text: 'Create Event',
                        click: function() {
                            window.location.href = '{{ route('admin.event.create') }}';
                        }
                    }
                },
                eventClick: function(info) {

                    const eventID = info.event.id;

                    const deleteMsg = confirm("Do you really want to delete?");

                    if (deleteMsg) {

                        $.ajax({

                            type: "POST",

                            url: '/admin/event/delete',

                            data: {

                                event_id: eventID,

                                _method: 'DELETE'

                            },

                            success: function(response) {
                                calendar.getEventById(eventID).remove();
                            },

                            error: function(response) {
                                //handle error
                            }

                        });

                    }

                },
            });
            calendar.render();
        });


        // Listen broadcast
        Echo.private('event')
            .listen('EventCreated', (e) => {
                console.log(e.event);
            });
    </script>
@endpush
