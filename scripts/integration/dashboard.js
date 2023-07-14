const getCookie = (name) => {
    let cookie = {};
    
    document.cookie.split(';').forEach(function(el) {
      let [k,v] = el.split('=');
      cookie[k.trim()] = v;
    })
    
    return cookie[name];
    
  }

jQuery(function($) {
	
    let tecnichian_name = getCookie('@UserName');
    let tecnichian_email = getCookie('@UserEmail');

    $('#name_tecnichian').text(tecnichian_name);
    $('#email_tecnichian').text(tecnichian_email);

});