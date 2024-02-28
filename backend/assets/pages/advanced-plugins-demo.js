/*
 Template Name: Lunoz - Admin & Dashboard Template
 Author: Myra Studio
 File: Advanced Plugins
*/


jQuery(function(a){a(".autonumber").autoNumeric("init")}),$("input#defaultconfig").maxlength({warningClass:"badge badge-success",limitReachedClass:"badge badge-danger"}),$("input#thresholdconfig").maxlength({threshold:20,warningClass:"badge badge-success",limitReachedClass:"badge badge-danger"}),$("input#alloptions").maxlength({alwaysShow:!0,separator:" out of ",preText:"You typed ",postText:" chars available.",validate:!0,warningClass:"badge badge-success",limitReachedClass:"badge badge-danger"}),$("textarea#textarea").maxlength({alwaysShow:!0,warningClass:"badge badge-success",limitReachedClass:"badge badge-danger"}),$("input#placement").maxlength({alwaysShow:!0,placement:"top-left",warningClass:"badge badge-success",limitReachedClass:"badge badge-danger"}),$('[data-toggle="switchery"]').each(function(a,e){new Switchery($(this)[0],$(this).data())}),$('[data-toggle="select2"]').select2();var defaultOptions={};$('[data-toggle="touchspin"]').each(function(a,e){var t=$.extend({},defaultOptions,$(e).data());$(e).TouchSpin(t)}),$("#basic-colorpicker").colorpicker(),$("#hexa-colorpicker").colorpicker({format:"auto"}),$("#component-colorpicker").colorpicker({format:null}),$("#horizontal-colorpicker").colorpicker({horizontal:!0}),$("#inline-colorpicker").colorpicker({color:"#DD0F20",inline:!0,container:!0});defaultOptions={cancelClass:"btn-light",applyButtonClasses:"btn-success"};$('[data-toggle="daterangepicker"]').each(function(a,e){var t=$.extend({},defaultOptions,$(e).data());$(e).daterangepicker(t)});var start=moment().subtract(29,"days"),end=moment(),defaultRangeOptions={startDate:start,endDate:end,ranges:{Today:[moment(),moment()],Yesterday:[moment().subtract(1,"days"),moment().subtract(1,"days")],"Last 7 Days":[moment().subtract(6,"days"),moment()],"Last 30 Days":[moment().subtract(29,"days"),moment()],"This Month":[moment().startOf("month"),moment().endOf("month")],"Last Month":[moment().subtract(1,"month").startOf("month"),moment().subtract(1,"month").endOf("month")]}};$('[data-toggle="date-picker-range"]').each(function(a,e){var t=$.extend({},defaultRangeOptions,$(e).data()),n=t.targetDisplay;$(e).daterangepicker(t,function(a,e){n&&$(n).html(a.format("MMMM D, YYYY")+" - "+e.format("MMMM D, YYYY"))})});