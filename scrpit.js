

// fetch("https://www.breakingbadapi.com/api/characters/1").then(promise=>promise.json()).then(data=>console.log(data)) 


// async function get(){
//     const response = await fetch("https://restcountries.com/v3.1/name/peru");
//     const data = await response.json();
//     console.log(data[0].name.official);
//     document.querySelector('.content').innerHTML = data[0].name.official;
// }
// get();

// new Vue({
//     el:"#content",
//     data: {
//         countries: []
//     },
//     methods:{

//         getAllData(){
//             fetch("https://www.breakingbadapi.com/api/").then(result=>result.json()).then(data=>this.countries=data)
//         }
//     }

// })


let url  = "http://localhost:3000/exemple_API/API/read_Single.php?id=2";

// function fetchData(callback){
//     fetch(url)
//     .then(function(response){
//         return response.json()
//     }).then(function(data){
//         callback(null,data)
//     }).catch(function(err){
//         callback(err,null)
//     })
// }
// fetchData(function(err,data){
//     if(err){
//         console.error(err)
//     }
//     console.log(data)
// })



async function fetchData(){
    let response = await fetch(url);
    let json = await response.json();
    return json;
}

async function main(){
    try {
        let json = await fetchData();
        console.log(json)
    } catch (error) {
        console.error(error)
    }
}
main();


