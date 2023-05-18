function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

async function main(){
    var svgElement = document.getElementById("text113");
    while(true){
        console.log(svgElement.parentElement.parentElement.parentElement.scrollHeight);
        await sleep(1000)
    }
}

main()