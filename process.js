//Initializing Variables
num = 0;
var persons = document.querySelectorAll(".personClass");
var buttonshome = document.querySelector(".buttonshome");
var likeArr =[];
var dislikeArr = [];
var person = "";
var likeList = document.getElementById("likeList");
var dislikeList = document.getElementById("dislikeList");

//Start Swiping Function
document.querySelector("#swipe").addEventListener("click", function() {
document.querySelector(".swipeDiv").classList.add("is-inactive");
buttonshome.classList.add("is-active");
persons[num].classList.add("is-active");

});

//Like the User Function
document.querySelector("#liked").addEventListener("click", function() {
    person = persons[num].children[0].innerHTML;
    likeArr.push(person);

    persons[num].classList.remove("is-active");
    num++;
    
    if(num == persons.length) {
        buttonshome.classList.remove("is-active");
        alert("the end");
        var theLikes = "";
        var theDisLikes = "";
        for(i=0;i<likeArr.length;i++) {
            theLikes += likeArr[i] + "<br >";
        }
        for(i=0;i<dislikeArr.length;i++) {
            theDisLikes += dislikeArr[i] + "<br >";
        }
        likeList.insertAdjacentHTML('beforeend', theLikes);
        dislikeList.insertAdjacentHTML('beforeend', theDisLikes);
        }
    else {
        persons[num].classList.add("is-active");
    }
});

//Dislike the User Function
document.querySelector("#disliked").addEventListener("click", function() {
    person = persons[num].children[0].innerHTML;
    dislikeArr.push(person);
    
    persons[num].classList.remove("is-active");
    num++;
    
    if(num == persons.length) {
        endofList();
    }
    else {
        persons[num].classList.add("is-active");
    }
});

//End of Users Function
function endofList() {
    
    
}


    
 


