//トップスクロール
$(function(){
    $("#logo a").click(function(){
        $('html,body').animate({ scrollTop: $($(this).attr("href")).offset().top }, 'slow','swing');
        return false;
    })
});

//クリックしたときに点線が出るのを防ぐ（IE用）
$(function(){
    $("#logo  a").focus(function(){
        $(this).blur();
    });
})