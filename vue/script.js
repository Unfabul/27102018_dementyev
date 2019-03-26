let app = new Vue({
    el: '.app',
    data:{
        title: 'Привет, мир!'
    }
});

let counterApp = new Vue({
    el: '.counter',
    data:{
        count: 10,
        count_clicks: 0
    }
});

setInterval(()=>{
    counterApp.count--;

    if(counterApp.count == 0 && counterApp.count_clicks < 5){
        alert('Вы проиграли');
    }
}, 1000);

let button = document.querySelector('.button');
let num = 0;
button.addEventListener('click', function(){
    num++;
    counterApp.count_clicks = num;

    if(num == 5){
        alert('Вы выиграли');
    }
});

