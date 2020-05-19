    function range() {
        let val = $('.range').val();
        $('.range').css({
            'background': '-webkit-linear-gradient(left ,#f16d7f 0%,#f16d7f ' + val / 5 + '%,#e6e6e6 ' + val / 5 +
                '%, #e6e6e6 100%)'
        });
        let slider = document.querySelector(".range");
        let output = document.getElementById("demo");
        output.innerHTML = '$' + slider.value;
        slider = function () {
            output.innerHTML = '$' + this.value;
        }
    }