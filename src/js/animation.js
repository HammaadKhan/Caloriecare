function setup() {
    var tmp = get('skin')
    if (tmp && $.inArray(tmp, mySkins))
        changeSkin(tmp)

    // Add the change skin listener
    $('[data-skin]').on('click', function (e) {
        if ($(this).hasClass('knob'))
            return
        e.preventDefault()
        changeSkin($(this).data('skin'))
    })











var $skinRed =
$('<li />', {style: 'float:left; width: 33.33333%; padding: 5px;'})
    .append('<a href="javascript:void(0)" data-skin="skin-red" style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)" class="clearfix full-opacity-hover">'
        + '<div><span style="display:block; width: 20%; float: left; height: 7px;" class="bg-red-active"></span><span class="bg-red" style="display:block; width: 80%; float: left; height: 7px;"></span></div>'
        + '<div><span style="display:block; width: 20%; float: left; height: 20px; background: #222d32"></span><span style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7"></span></div>'
        + '</a>'
        + '<p class="text-center no-margin">Red</p>')