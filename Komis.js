class Komis{
    constructor(nazwa) {
        this.nazwa = nazwa;
        this.samochody = [];
    }
    dodajSamochod(auto){

        this.samochody.push(auto);
    }
    
    wyswietlSamochody(){
        const div = document.querySelector('div');

        this.samochody.forEach((auto)=> {
            div.innerHTML += `<p>Marka: ${auto.marka}</p>`;
            div.innerHTML += `<p>Model: ${auto.model}</p>`;
            div.innerHTML += `<p>Cena: ${auto.cena}</p>`;
            div.innerHTML += `<hr>`;

        });
    }
    
}