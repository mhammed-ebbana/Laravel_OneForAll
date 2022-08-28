const puppeteer = require('puppeteer');
 
(async () => {
  const browser = await puppeteer.launch({headless:false});
  const page = await browser.newPage();

  await page.goto('https://www.amazon.com');
  await page.goto('https://www.amazon.com');

  await page.type('.nav-input.nav-progressive-attribute', 'android phone');
  const allResultsSelector = '.nav-search-submit-text';
 
  await page.waitForSelector(allResultsSelector);
  await page.click(allResultsSelector);
  await page.waitForNavigation();
  console.log(page.url());

  const Product_Price = '#high-price';
 
  await page.waitForSelector(allResultsSelector);

  await page.type(Product_Price,"600");
  
  await page.waitForSelector('#a-autoid-1-announce');
  await page.click('#a-autoid-1-announce');
  await page.waitForNavigation(); 

const  produits_Select='.s-result-item.s-asin.sg-col-0-of-12.sg-col-16-of-20.AdHolder.sg-col.s-widget-spacing-small.sg-col-12-of-16';
await page.waitForSelector(produits_Select);
  const products = await page.$$(produits_Select);
let myJSON='[';
let i=0;
for( let p of products ) {
    try {

        let link_selector ='.a-link-normal.s-underline-text.s-underline-link-text.s-link-style.a-text-normal';
        
        await p.waitForSelector(link_selector);
        let link= await(await ( await p.$(link_selector) ).getProperty('href')).jsonValue() ;
       
        
        let name_selector ='.a-size-medium.a-color-base.a-text-normal';
        
        await p.waitForSelector(name_selector);
        let name= await(await ( await p.$(name_selector) ).getProperty('innerHTML')).jsonValue() ;
        
        let price_selector ='.a-offscreen';
        
        await p.waitForSelector(price_selector);
        let price= await(await ( await p.$(price_selector) ).getProperty('innerHTML')).jsonValue() ;

        let image_selector ='.s-image';
        
        await p.waitForSelector(image_selector);
        let image= await(await ( await p.$(image_selector) ).getProperty('src')).jsonValue() ;
        let pro={
          link:link,
          name:name,
          price:price,
          image_Url:image
        };
        if(i<1)
        {myJSON += JSON.stringify(pro);}
        else
       { myJSON += ','+JSON.stringify(pro);}
 
    }
    catch( e ) {
        console.log( `Could not get the productfrom amazone becausof :`, e.message );
    }
    i++;
    if(i>6)
    {
      break;
    }
}
myJSON+=']';

const myfile_product_amazon_file= JSON.parse(myJSON);
console.log(myfile_product_amazon_file);

})();


