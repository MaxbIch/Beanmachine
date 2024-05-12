    let checkStorage = sessionStorage.getItem("videoPlay");
    // Clear video data in storage
    console.log(checkStorage)
    window.onload = function(){
        console.log("window load")
        if(!!checkStorage == true){
            sessionStorage.clear();
            checkStorage = null;
        }
    }

    // Video control

    $(window).scroll(function(){
        let scrollTop = $(window).scrollTop();
        let docHeight = $(document).height();
        let winHeight = $(window).height();
        let scrollPercent = (scrollTop) / (docHeight - winHeight);
        let scrollPercentRounded = Math.round(scrollPercent*100);
        if (!!checkStorage != true) {
            if (Math.round(scrollPercent * 100) >= 15 && Math.round(scrollPercent * 100) <= 16) {
                let vidd = document.getElementById("gif2");
                function enableControlss() {
                    vidd.autoplay = true;
                    vidd.load();
                }
                enableControlss();
                let setSession = window.sessionStorage.setItem("videoPlay", true);
                checkStorage = sessionStorage.getItem("videoPlay");
            }
            $('#scrollPercentLabel>div').html(scrollPercentRounded);
        }

    });

    let vid = document.getElementById("gif1");
    function enableControls() {
        vid.autoplay = true;
        vid.load();
    }

    enableControls();


