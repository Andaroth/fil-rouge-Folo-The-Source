var scrollDown = document.getElementById('bot');
if(scrollDown){
    scrollDown.addEventListener('click',function(){
        document.querySelector('.fifthPage').scrollIntoView({ behavior: 'smooth' });
    });
}
