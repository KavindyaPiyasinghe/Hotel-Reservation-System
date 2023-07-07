function message(){
    var fname = document.getElementById('first');
    var sname = document.getElementById('second');
    var mail = document.getElementById('mail');
    var tel = document.getElementById('tel');
    var msg = document.getElementById('msg');
    const success = document.getElementById('success');
    const danger = document.getElementById('danger');

    if(fname.value === '' || sname.value === '' || mail.value === '' || tel.value === '' ||
     msg.value === ''){
        danger.style.display = 'block';
    }
    else{
        setTimeout(() => {
            fname.value = '';
            sname.value = '';
            mail.value = '';
            tel.value = '';
            msg.value = '';
        }, 5000);

        success.style.display = 'block';
    }


    setTimeout(() => {
        danger.style.display = 'none';
        success.style.display = 'none';
    }, 4000);

}