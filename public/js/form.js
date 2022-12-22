  const lastname = document.querySelector("input[name='lastname']");
  lastname.addEventListener('focusout',  () => {
    if (!lastname.value) {
      // console.log("名前を入力してください");
      const errMsgName = document.querySelector('.err-msg-name');
      errMsgName.textContent = '名前を入力してください';
      return
    }else{
      const errMsgName = document.querySelector('.err-msg-name');
      errMsgName.textContent ='';
    }
  });

  const firstname = document.querySelector("input[name='firstname']");
  firstname.addEventListener('focusout',  () => {
    if (!firstname.value) {
      // console.log("名前を入力してください");
      const errMsgName = document.querySelector('.err-msg-name');
      errMsgName.textContent = '名前を入力してください';
      return
    }else{
      const errMsgName = document.querySelector('.err-msg-name');
      errMsgName.textContent ='';
    }
  });

var pattern_email = /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]+.[A-Za-z0-9]+$/;
  
  const email = document.querySelector("input[name='email']");
  email.addEventListener('focusout',  () => {
    if (!email.value) {
      // console.log("名前を入力してください");
      const errMsgName = document.querySelector('.err-msg-email');
      errMsgName.textContent = 'メールアドレスを入力してください';
      return
    } else if (!email.value.match(pattern_email)) {
      const errMsgName = document.querySelector('.err-msg-email');
      errMsgName.textContent = 'メールアドレスの形式で入力してください';
      return
    } else {
      const errMsgName = document.querySelector('.err-msg-email');
      errMsgName.textContent ='';
    }
  });

var pattern_postcode = /^[0-9]{3}-[0-9]{4}$/;

  const postcode = document.querySelector("input[name='postcode']");
  postcode.addEventListener('focusout',  () => {
    if (!postcode.value) {
      // console.log("名前を入力してください");
      const errMsgName = document.querySelector('.err-msg-postcode');
      errMsgName.textContent = '郵便番号を入力してください';
      return
    } else if (!postcode.value.match(pattern_postcode)) {
      const errMsgName = document.querySelector('.err-msg-postcode');
      errMsgName.textContent = '郵便番号の形式で入力してください';
      return
    }else{
      const errMsgName = document.querySelector('.err-msg-postcode');
      errMsgName.textContent ='';
    }
  });

  const address = document.querySelector("input[name='address']");
  address.addEventListener('focusout',  () => {
    if (!address.value) {
      // console.log("名前を入力してください");
      const errMsgName = document.querySelector('.err-msg-address');
      errMsgName.textContent = '住所を入力してください';
      return
    } else{
      const errMsgName = document.querySelector('.err-msg-address');
      errMsgName.textContent ='';
    }
  });

  const opinion = document.querySelector("textarea[name='opinion']");
  opinion.addEventListener('focusout',  () => {
    if (!opinion.value) {
      // console.log("名前を入力してください");
      const errMsgName = document.querySelector('.err-msg-opinion');
      errMsgName.textContent = 'ご意見を入力してください';
      return
    } else if (opinion.length > 120) {
      console.log('120文字以内で入力してください');
      const errMsgName = document.querySelector('.err-msg-opinion');
      errMsgName.textContent = '120文字以内で入力してください';
      return
    }else{
      const errMsgName = document.querySelector('.err-msg-opinion');
      errMsgName.textContent ='';
    }
  });
