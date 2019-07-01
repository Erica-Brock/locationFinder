
document.addEventListener('DOMContentLoaded', (event) => {
    console.log('DOM fully loaded and parsed');
    //get the zipcode input from form
    let zipBtn=document.getElementById('zip-btn');
    let geoBtn=document.getElementById('geo-btn');
    let userInput=document.getElementById('user-location');
    //prepare location data
    let origins=zipCodes.join('|');
    var uLocation;
    let destination= uLocation;
    console.log(origins);
    //connect to googlemapsapi
    let key='&key=' + gMapKey;
    let callBase="https://cors-anywhere.herokuapp.com/https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins="

    function checkDistance(destination){
        let fullCall=callBase + origins +'&destinations='+ destination +key;
        console.log(fullCall);
        $.ajax({
            url:fullCall
        }).then(function(sucess){
            let values= zipCodes;
            let keys=[];
            let result={};
            for(let i=0; i<sucess.rows.length; i++){
                keys.push(sucess.rows[i].elements[0].distance.value);
            }
            keys.forEach((key, i) => result[key] = values[i]);
            Array.min= function( array ){
                return Math.min.apply(Math, array);
            }
            let shortestDistance= Array.min(keys);
            let userDestination =result[shortestDistance];
            document.getElementById('user-destination').value=userDestination;
            document.getElementById('location-form').submit();

        })

    }
    zipBtn.addEventListener('click', ()=>{
        getZip();
    });
    geoBtn.addEventListener('click', ()=>{
        getLocation();
    });
    userInput.addEventListener('keydown', function onEvent(e){
        if(e.key=== 'Enter'){
            getZip();
        }
    });
    function getZip(){
        let uLocation= document.getElementById('user-location').value;
        checkDistance(uLocation);
    }
    // function getZipE(ele){
    //     if(event.key=== 'Enter'){
    //         getZip();
    //     }
    // }
    function saveLocation(position){
        let locationLat=position.coords.latitude;
        let locationLng=position.coords.longitude;
        let uLocation= locationLat + ','+ locationLng;
        console.log(uLocation);
        checkDistance(uLocation);
    }
    function getLocation(){
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(saveLocation);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }
});


