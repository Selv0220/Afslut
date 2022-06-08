export default class produkter{
    constructor() {
        this.rootElem = document.querySelector('.produkter');
    }

    async init(){
        await this.render();
    }

    async render(){
        const data = await this.getData();
        console.log(data)

        const row = document.createElement('div');

        for(const item of data){
            const col =document.createElement('div');
            col.classList.add('col-6');

            col.innerHTML =''

            ;

            row.appendChild(col);
        }

        this.rootElem.appendChild(row);
    }

    async getData(){
        const response =await fetch('products.json');
        return await response.json();
    }
}