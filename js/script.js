let openNav = document.querySelector(".mobile-menu-icon");
let closeNav = document.querySelector(".close-btn");

openNav.addEventListener('click', (e) =>{
    e.preventDefault();
   document.getElementById("myside-bar").style.width = "73%";
   document.querySelector(".navigation").style.marginLeft = "73%"; 
   openNav.style.display = "none";
});

closeNav.addEventListener('click', () =>{
    document.getElementById("myside-bar").style.width = "0";
    document.querySelector(".navigation").style.marginLeft = "0";
    openNav.style.display = "flex";
});

//let courseListView = document.querySelector('.flex-box');


/*if(courseListView){

    fetch('js/cours.json')
    .then((query) =>  query.json())
    .then((data) => {
        console.log(data)

        let courses = data;

        for (const course of courses){
            courseListView.innerHTML += `
                <div class="flex-items">
                    <img src=${course.image}>
                    <h3>${course.title}</h3>
                    <small>${course.time} heures</small>
                </div>
            `
                
        }
    });
}*/