var animalData;
$.getJSON("../animals.json", function(jsonData){
    animalData = jsonData;
});

var generateDogTable = (data) => {
    for(let i = 0; i < data.dogs.length; i++){
        var tr = document.createElement('tr');
        let tdName = document.createElement('td');
        tdName.textContent = data.dogs[i].name;
        tr.appendChild(tdName);
        let tdBreed = document.createElement('td');
        tdBreed.textContent = data.dogs[i].breed;
        tr.appendChild(tdBreed);                
        let tdSex = document.createElement('td');
        tdSex.textContent = data.dogs[i].sex;
        tr.appendChild(tdSex);                
        let tdShots = document.createElement('td');
        tdShots.textContent = data.dogs[i].shots;
        tr.appendChild(tdShots);                
        let tdAge = document.createElement('td');
        tdAge.textContent = data.dogs[i].age;
        tr.appendChild(tdAge);                
        let tdSize = document.createElement('td');
        tdSize.textContent = data.dogs[i].size;
        tr.appendChild(tdSize);                
        let tdLicensed = document.createElement('td');
        tdLicensed.textContent = data.dogs[i].licensed;
        tr.appendChild(tdLicensed);
        let tdNeutered = document.createElement('td');
        tdNeutered.textContent = data.dogs[i].neutered;
        tr.appendChild(tdNeutered);                
        let tdOwners = document.createElement('td');
        tdOwners.textContent = data.dogs[i].owners;
        tr.appendChild(tdOwners);                
        let tdNotes = document.createElement('td');
        tdNotes.textContent = data.dogs[i].notes;
        tr.appendChild(tdNotes);
        document.getElementById("dogTable").appendChild(tr);                
    }
}
var generateCatTable = (data) => {
    for(let i = 0; i < data.cats.length; i++){
        var tr = document.createElement('tr');
        let tdName = document.createElement('td');
        tdName.textContent = data.cats[i].name;
        tr.appendChild(tdName);
        let tdBreed = document.createElement('td');
        tdBreed.textContent = data.cats[i].breed;
        tr.appendChild(tdBreed);                
        let tdSex = document.createElement('td');
        tdSex.textContent = data.cats[i].sex;
        tr.appendChild(tdSex);                
        let tdShots = document.createElement('td');
        tdShots.textContent = data.cats[i].shots;
        tr.appendChild(tdShots);                
        let tdAge = document.createElement('td');
        tdAge.textContent = data.cats[i].age;
        tr.appendChild(tdAge);                
        let tdSize = document.createElement('td');
        tdSize.textContent = data.cats[i].declawed;
        tr.appendChild(tdSize);                
        let tdNeutered = document.createElement('td');
        tdNeutered.textContent = data.cats[i].neutered;
        tr.appendChild(tdNeutered);                
        let tdOwners = document.createElement('td');
        tdOwners.textContent = data.cats[i].owners;
        tr.appendChild(tdOwners);                
        let tdNotes = document.createElement('td');
        tdNotes.textContent = data.cats[i].notes;
        tr.appendChild(tdNotes);                
        document.getElementById("catTable").appendChild(tr);                
    }
}
var generateExoticTable = (data) => {
    for(let i = 0; i < data.exotics.length; i++){
        var tr = document.createElement('tr');
        let tdName = document.createElement('td');
        tdName.textContent = data.exotics[i].name;
        tr.appendChild(tdName);
        let tdBreed = document.createElement('td');
        tdBreed.textContent = data.exotics[i].species;
        tr.appendChild(tdBreed);                
        let tdSex = document.createElement('td');
        tdSex.textContent = data.exotics[i].sex;
        tr.appendChild(tdSex);                
        let tdShots = document.createElement('td');
        tdShots.textContent = data.exotics[i].age;
        tr.appendChild(tdShots);                                
        let tdSize = document.createElement('td');
        tdSize.textContent = data.exotics[i].owners;
        tr.appendChild(tdSize);                
        let tdLicensed = document.createElement('td');
        tdLicensed.textContent = data.exotics[i].notes;
        tr.appendChild(tdLicensed);                
        document.getElementById("exoticTable").appendChild(tr);                
    }
}
//var data = {
//     "dogs": [
//         {
//             "name": "Tracker",
//             "breed": "Springer",
//             "sex": "Male",
//             "shots": "Yes",
//             "age": "12",
//             "size": "40g.",
//             "licensed": "Yes",
//             "neutered": "No",
//             "owners": "Backs",
//             "notes": "Notes"
//         },
//         {
//             "name": "Bucky",
//             "breed": "Poodle",
//             "sex": "Female",
//             "shots": "Not all",
//             "age": "4",
//             "size": "12g.",
//             "licensed": "No",
//             "neutered": "Yes",
//             "owners": "Johnsons",
//             "notes": "Notes"
//         },
//         {
//             "name": "Bailey",
//             "breed": "Beagle/Hound",
//             "sex": "Female",
//             "shots": "Yes",
//             "age": "6",
//             "size": "24g.",
//             "licensed": "Yes",
//             "neutered": "No",
//             "owners": "Backs",
//             "notes": "Notes"
//         }
//     ],
//     "cats": [
//         {
//             "name": "Whiskers",
//             "breed": "Siamese",
//             "sex": "Female",
//             "shots": "Not all",
//             "age": "8",
//             "declawed": "Yes",
//             "neutered": "No",
//             "owners": "Smiths",
//             "notes": "Notes"
//         },
//         {
//             "name": "Fluffy",
//             "breed": "Sphynx",
//             "sex": "Male",
//             "shots": "Yes",
//             "age": "4",
//             "declawed": "No",
//             "neutered": "Yes",
//             "owners": "Squires",
//             "notes": "Notes"
//         },
//         {
//             "name": "Scitz",
//             "breed": "House",
//             "sex": "Female",
//             "shots": "Yes",
//             "age": "12",
//             "declawed": "Yes",
//             "neutered": "Yes",
//             "owners": "Backs",
//             "notes": "Notes"
//         }
//     ],
//     "exotics": [
//     {
//             "name": "Lizzy",
//             "species": "Lizard",
//             "sex": "Female",
//             "age": "3",
//             "owners": "Durfeys",
//             "notes": "Notes"
//         },
//         {
//             "name": "Young Boss",
//             "species": "Squirrel",
//             "sex": "Male",
//             "age": "8",
//             "owners": "Shelleys",
//             "notes": "Notes"
//         },
//         {
//             "name": "Ball",
//             "species": "Hamster",
//             "sex": "Male",
//             "age": "1",
//             "owners": "Gales",
//             "notes": "Notes"
//         }
//     ]
// }