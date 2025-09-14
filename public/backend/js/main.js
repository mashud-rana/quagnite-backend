(function ($) {
  ("use strict");

  /*========================================
        Preloader
    ========================================*/

  $(window).on("load", function () {
    $(".ic-loading").fadeOut(500);
  });

  /*========================================
    Ic Mobile menu activation
   ========================================*/

  $(".ic-sidebar-toggle").on("click", function () {
    $(
      ".ic-main-sidebar,.ic-dashboard-overlay,.ic-pages-left-sidebar-wraper"
    ).addClass("active");
  });
  $(".ic-mobile-sidebar-close,.ic-dashboard-overlay").on("click", function () {
    $(
      ".ic-main-sidebar,.ic-dashboard-overlay,.ic-pages-left-sidebar-wraper"
    ).removeClass("active");
  });

  /*========================================
    Course Video
   ========================================*/

  const videoElement = document.querySelectorAll(".video-tutorial");

  for (const item of videoElement) {
    ResponsiveVideoPoster({
      selector: item,
      preConnections: ["https://www.youtube.com"],
    });
  }

  /*========================================
    User Profile Next
   ========================================*/

  $(".user-info-next-click").on("click", function () {
    let itemClass = $(this).data("item");
    $(".ic-user-info-step").hide();
    $("#" + itemClass).fadeIn();
  });

  $(".upload-cover-photo").on("change", function (e) {
    let file = e.target.files[0];
    let reader = new FileReader();
    reader.onload = (e) => {
      $(".ic-user-cover-photo").css(
        "background-image",
        `url(${e.target.result})`
      );
    };
    reader.readAsDataURL(file);
    $(".ic-cover-drop-message").hide();
  });

  /*========================================
    Select
   ========================================*/
  $(".ic-select").selectpicker();

  /*========================================
    Date Picker
   ========================================*/

  $(".date-picker").flatpickr({
    dateFormat: "m-Y",
  });

  $(".date-fullpicker").flatpickr({
    dateFormat: "d-m-Y",
  });

  $(".time-picker").flatpickr({
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
  });

  /*========================================
    CV Upload
   ========================================*/

  $("#cvUpload").on("change", function (e) {
    var fileName = e.target.files[0].name;
    $(".file-label").html(fileName);
  });

  $(".content-image-upload").on("change", function (e) {
    var fileName = e.target.files[0].name;
    $(".file-name").html(fileName);
  });

  /*========================================
   Dropzone
   ========================================*/

  Dropzone.autoDiscover = false;
  $(".dropzone").dropzone({
    url: "/",
  });

  /*========================================
   Tagify
   ========================================*/

  //University Tag

  var input = document.querySelector(".university-tag");

  var tagify = new Tagify(input, {
    whitelist: ["Graphic Design", "Web Design", "laravel", "php", "javascript"],
    maxTags: 3,
    dropdown: {
      classname: "tags-look",
      enabled: 0,
      closeOnSelect: false,
    },
  });

  //language Tag

  var languageInput = document.querySelector(".language-tag");

  var tagify = new Tagify(languageInput, {
    whitelist: ["Dutch", "English", "French", "German", "Italian", "Spanish"],
    dropdown: {
      classname: "tags-look",
      enabled: 0,
      closeOnSelect: false,
    },
  });

  //language Tag

  var languageInput2 = document.querySelector(".otherLanguage-tag");

  var tagify = new Tagify(languageInput2, {
    whitelist: ["Dutch", "English", "French", "German", "Italian", "Spanish"],
    dropdown: {
      classname: "tags-look",
      enabled: 0,
      closeOnSelect: false,
    },
  });

  //Job Create Skills tags
  var skillsInput = document.querySelector(".skills-tag");

  var tagify = new Tagify(skillsInput, {
    whitelist: ["HTML", "CSS", "javascript", "jquery", "React", "Next js"],
    dropdown: {
      classname: "tags-look",
      enabled: 0,
      closeOnSelect: false,
    },
  });

  //Content Create

  var skillsInput = document.querySelector(".content-tag");

  var tagify = new Tagify(skillsInput, {
    whitelist: ["HTML", "CSS", "javascript", "jquery", "React", "Next js"],
    dropdown: {
      classname: "tags-look",
      enabled: 0,
      closeOnSelect: false,
    },
  });

  /*========================================
   Create Event
   ========================================*/

  $(".offline-input-click").on("click", function () {
    if ($(this).is(":checked")) {
      $(".event-place-group").show();
    }
  });
  $(".online-input-click").on("click", function () {
    if ($(this).is(":checked")) {
      $(".event-place-group").hide();
    }
  });

  $(".event-free-click").on("click", function () {
    if ($(this).is(":checked")) {
      $(".event-fee-group").hide();
    }
  });
  $(".event-paid-click").on("click", function () {
    if ($(this).is(":checked")) {
      $(".event-fee-group").show();
    }
  });

  /*========================================
   Event Create Editor
   ========================================*/

  if ($("#eventEditor").length > 0) {
    ClassicEditor.create(document.querySelector("#eventEditor")).catch(
      (error) => {
        console.error(error);
      }
    );
  }

  $(".rating-event").starRating({
    initialRating: 0,
    strokeWidth: 0,
    starSize: 50,
    emptyColor: "#ACB3BC",
    hoverColor: "#FFCD1A",
    activeColor: "#FFCD1A",
    ratedColors: ["#FFCD1A", "#FFCD1A", "#FFCD1A", "#FFCD1A", "#FFCD1A"],
    useGradient: false,
  });

  /*========================================
   Google Map
   ========================================*/

  function initMap() {
    let location = new google.maps.LatLng(41.850033, -87.6500523);
    let mapOptions = {
      zoom: 7,
      center: location,
    };
    let map = new google.maps.Map(
      document.getElementById("companyMap"),
      mapOptions
    );
    new google.maps.Marker({
      position: location,
      map,
    });
  }

  function initMap2() {
    let location = new google.maps.LatLng(41.850033, -87.6500523);
    let mapOptions = {
      zoom: 7,
      center: location,
    };
    let map = new google.maps.Map(
      document.getElementById("companyEditMap"),
      mapOptions
    );
    new google.maps.Marker({
      position: location,
      map,
    });
  }

  $(document).ready(function () {
    initMap();
    initMap2();
  });

  /*========================================
   Input add remove
   ========================================*/

  $(document)
    .on("click", ".add-phone", function (e) {
      e.preventDefault();

      const controlForm = $(".form-multiple-wrap:first"),
        currentEntry = $(this).parents(".form-multiple-input-add:first"),
        newEntry = $(currentEntry.clone()).appendTo(controlForm);

      newEntry.find("input").val("");
      controlForm
        .find(".form-multiple-input-add:not(:last) .add-phone")
        .removeClass("add-phone")
        .addClass("btn-remove")
        .removeClass("btn-success")
        .addClass("btn-danger")
        .html('<i class="ri-close-line"></i>');
    })
    .on("click", ".btn-remove", function (e) {
      $(this).parents(".form-multiple-input-add:first").remove();
      e.preventDefault();
      return false;
    });

  $(document)
    .on("click", ".add-mail", function (e) {
      e.preventDefault();

      const controlForm = $(".form-multiple-wrap2:first"),
        currentEntry = $(this).parents(".form-multiple-input-add:first"),
        newEntry = $(currentEntry.clone()).appendTo(controlForm);
      newEntry.find("input").val("");
      controlForm
        .find(".form-multiple-input-add:not(:last) .add-mail")
        .removeClass("add-mail")
        .addClass("btn-remove")
        .removeClass("btn-success")
        .addClass("btn-danger")
        .html('<i class="ri-close-line"></i>');
    })
    .on("click", ".btn-remove", function (e) {
      $(this).parents(".form-multiple-input-add:first").remove();
      e.preventDefault();
      return false;
    });

  /*========================================
   More Filter
   ========================================*/

  $(".more-filter-toggle").on("click", function () {
    $(".ic-more-filter-wraper").toggleClass("active");
  });

  /*========================================
   Custom Tab
   ========================================*/

  $(".ic-tab-link").on("click", function (e) {
    e.preventDefault();
    $(".ic-tab-link").removeClass("active");
    $(this).addClass("active");
    let itemClass = $(this).data("tabs");
    $(".ic-tab-pane").hide();
    $("#" + itemClass).fadeIn();
  });

  /*========================================
   player video
   ========================================*/

  const player = new Plyr("#player", {
    controls: [
      "play-large",
      "restart",
      "rewind",
      "play",
      "fast-forward",
      "progress",
      "current-time",
      "duration",
      "mute",
      "volume",
      "captions",
      "settings",
      "pip",
      "airplay",
      "fullscreen",
    ],
  });

  /*========================================
    Bootstrap Tooltip
   ========================================*/

  const tooltipTriggerList = document.querySelectorAll(
    '[data-bs-toggle="tooltip"]'
  );
  const tooltipList = [...tooltipTriggerList].map(
    (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
  );
})(jQuery);
