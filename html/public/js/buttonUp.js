let buttonUp = document.querySelector(".buttonUp");

function goUp(pxScreen) {
    window.addEventListener("scroll", () => {
        let scrool = document.documentElement.scrollTop;

        if (scrool > pxScreen) {
            buttonUp.style.right = 20 + "px";
        } else {
            buttonUp.style.right = -100 + "px";
        }
    });

    buttonUp.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    });
}

goUp(400);
