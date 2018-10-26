var postcode = document.getElementById('input-postcode');
var address = document.getElementById('input-address');

if (postcode.addEventListener) {   // For all major browsers, except IE 8 and earlier
    postcode.addEventListener("keyup", function (){
    	if(this.value.trim() == ""){
    		postal_opt.textContent = '在这里您可以完善您的邮政编码';
    		postal_opt.style.color = 'darkred';
    	}
    }, true);
} else if (postcode.attachEvent) {    // For IE 8 and earlier versions
    postcode.attachEvent("keyup", function (){
    	if(this.value.trim() == ""){
    		postal_opt.innerText = '在这里您可以完善您的邮政编码';
    		postal_opt.style.color = 'darkred';
    	}
    });
}
if (address.addEventListener) {   // For all major browsers, except IE 8 and earlier
    address.addEventListener("keyup", function (){
    	if(this.value.trim() == ""){
    		addr_opt.textContent = '您可以完善地填写详细地址';
    		addr_opt.style.color = 'darkred';
    	}
    }, true);
} else if (address.attachEvent) {    // For IE 8 and earlier versions
    address.attachEvent("mouseout", function (){
    	if(this.value.trim() == ""){
    		addr_opt.innerText = '在这里您可以完善地填写详细地址';
    		addr_opt.style.color = 'darkred';
    	}
    });
}
