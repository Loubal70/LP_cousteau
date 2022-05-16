window.addEventListener("load", function (event) {

    /**
     *  Button Go to TOP
     */
    //  Get the button
    let mybutton = document.querySelector(".back-to-top");
    console.log(mybutton);

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.classList.add("active");
        } else {
            mybutton.classList.remove("active");
        }
    }


});

/**
 *  When the user clicks on the GO TO TOP button, scroll to the top of the document
 */
 function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}