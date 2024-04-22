<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slider</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  
  

 

    <style>
    /* body{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    } */

    .slider-wrapper .image-list {
        display: grid;
        gap: 18px;
        grid-template-columns: repeat(10, 1fr);
        overflow-x:auto ;
        scrollbar-width: none;
    }

    .slider-wrapper .image-list::-webkit-scrollbar {
        display: none;
    }

    .slider-wrapper .image-list .image-item {
        width: 325px;
        height: 400px;
        object-fit: cover;
    }

    .content{
        width: 100%;
        margin-top: 30px;
      
    }

    .content .slider-wrapper{
        position: relative;
      
    }

    .content .slider-wrapper .slide-button {
        width: 50px;
        height: 50px;
        color: white;
        background-color: #035878;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        position: absolute;
        font-size: 2.2rem;
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .content .slider-wrapper .slide-button:hover {
        background: orangered;

    }

    .content .slider-wrapper .slide-button#prev-slide {
        left: 0px;
        top: 50%;
        transform: translateY(-50%);
        display: none;
    }

    .content .slider-wrapper .slide-button#next-slide {
        right: 0px;
        top: 50%;
        transform: translateY(-50%);
    }

    .content .slider-scrollbar {
      
        width: 100%;
        height: 24px;
        /* background-color: #ccc; */
        margin-top: 20px;
        display: flex;
        align-items: center;
    }

    .content .slider-scrollbar .slider-scrollbar-track {
        position: relative;
        width: 100%;
        height: 3px;
        background-color: #fff;
        border-radius: 10px;
      
    }

    .content .slider-scrollbar:hover .slider-scrollbar-track{
        height: 4px;
    }

    .content .slider-scrollbar .slider-scrollbar-thumb {
        position: absolute;
        width: 50%;
        height: 3px;
        background-color: #035878;
        cursor: pointer;
        border-radius: inherit;
    }

    .content .slider-scrollbar .slider-scrollbar-thumb:active{
        height: 8px;
        top: -2px;
        cursor: grabbing;
    }

    .content .slider-scrollbar .slider-scrollbar-thumb::after {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        top: -10px;
        bottom: -10px;
    }

   </style>

</head>
<body>
<div class="content">
            <div class="slider-wrapper">
            <button class="slide-button" id="prev-slide"><i class="material-icons">chevron_left</i></button>
                
                <div class="image-list">
                    <img src="../image/cha.jpg" alt="" class="image-item">
                    <img src="../image/e4.jpg" alt="" class="image-item">
                    <img src="../image/e2.jpg" alt="" class="image-item">
                    <img src="../image/meet.jpg" alt="" class="image-item">
                    <img src="../image/leader.jpg" alt="" class="image-item">
                    <img src="../image/part.jpg" alt="" class="image-item">
                    <img src="../image/get.jpg" alt="" class="image-item">
                    <img src="../image/mus.jpg" alt="" class="image-item">
                    <img src="../image/cha.jpg" alt="" class="image-item">
                    <img src="../image/e4.jpg" alt="" class="image-item">
                    
                </div>

                <button class="slide-button" id="next-slide"><i class="material-icons">chevron_right</i></button>
            </div>

            <div class="slider-scrollbar">
                <div class="slider-scrollbar-track">
                    <div class="slider-scrollbar-thumb">

                    </div>
                </div>
            </div>
        </div>

        <script>
            const initSlider = () =>{
                const imageList = document.querySelector('.image-list');
                const slideButtons = document.querySelectorAll('.slide-button');
                const sliderScrollbar = document.querySelector('.slider-scrollbar');
                const sliderScrollbarThumb = sliderScrollbar.querySelector('.slider-scrollbar-thumb');
                const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;

                sliderScrollbarThumb.addEventListener("mousedown", (e)=>{
                    const startX = e.clientX;
                    const thumbPosition = sliderScrollbarThumb.offsetWidth;

                    const mouseMoveHandler = (e) =>{
                        const moveX = e.clientX - startX;
                        const scrollAmount = thumbPosition + moveX;
                        const maxThumbePosition = sliderScrollbar.getBoundingClientRect().width - sliderScrollbarThumb.offsetWidth;

                        const boundedPosition = Math.max(0, Math.min(maxThumbePosition, scrollAmount));
                        const scrollPosition = maxScrollLeft * (boundedPosition / maxThumbePosition);

                        sliderScrollbarThumb.style.left = `${boundedPosition}px`;
                        imageList.scrollLeft = scrollPosition;
                    }

                    const mouseUp = () =>{
                        document.removeEventListener("mousemove", mouseMoveHandler);
                        document.removeEventListener("mouseup", mouseUp);
                    }

                    document.addEventListener("mousemove", mouseMoveHandler);
                    document.addEventListener("mouseup", mouseUp);
                    


                })

                slideButtons.forEach(button => {
                    button.addEventListener('click', () => {
                        const direction =button.id === 'prev-slide' ? -1 : 1;
                        const scrollAmount = imageList.clientWidth * direction;
                        imageList.scrollBy({
                            left: scrollAmount,
                            behavior: 'smooth'
                        });
                    });
                });

                const handleSlideButtons = () =>{
                    slideButtons[0].style.display = imageList.scrollLeft <= 0 ? 'none' : 'block';
                    slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? 'none' : 'block';

                }

                const updateScrollThumbPosition = () =>{
                    const scrollPosition = imageList.scrollLeft;
                    const thumbPosition = (scrollPosition / maxScrollLeft ) * (sliderScrollbar.clientWidth - sliderScrollbarThumb.offsetWidth);
                    sliderScrollbarThumb.style.left = `${thumbPosition}px`;
                }

                imageList.addEventListener("scroll",()=>{
                    handleSlideButtons();
                    updateScrollThumbPosition();
                });
            }

            window.addEventListener('load', initSlider);
        </script>
</body>
</html>