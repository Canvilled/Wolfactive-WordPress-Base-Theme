// const displayProduct =(res)=>{
//   var houseList = res.data.house_products.edges;
//   var houseListContent = document.querySelector(".product .product__contain .product__list");
//   var content = ``;
//   houseList.forEach((houseItem, index) => {
//   if(houseItem.node.DuAn.specialProduct === "on"){
//     var starCheck = houseItem.node.DuAn.checkProduct;
//     var starLeft  = 5 - starCheck;
//     var starResult = ``;
//     var houseTypeList = houseItem.node.terms;
//     var houseTypeItemContent = ``;
//     var convenProductList = houseItem.node.DuAn.convenProduct;
//     var conventProducContent = ``;
//     houseTypeList.forEach((houseTypeItem, index) => {
//       if(index === houseTypeList.length-1){
//         houseTypeItemContent += `<a href="${houseTypeItem.link}" class="text--light">${houseTypeItem.name}</a>`;
//       }else{
//         houseTypeItemContent += `<a href="${houseTypeItem.link}" class="text--light">${houseTypeItem.name}</a>;`;
//       }
//     });
//     convenProductList.forEach((convenProductItem) => {
//       conventProducContent += `
//       <div class="col-divide-mutan-5 col-divide-md-6 my-6">
//         <p class="text--yellow">${convenProductItem.nameConven}</p>
//         <p class="text--light product--number">0${convenProductItem.numberConven}</p>
//       </div>`
//     });
//     if(starLeft > 0){
//       for( var starCount=1; starCount <= starCheck; starCount++){
//          starResult +=`<i class="fas fa-star text--yellow mxr-5"></i>`;
//       }
//       for(starCountLeft=1; starCountLeft <= starLeft; starCountLeft++){
//          starResult +=`<i class="far fa-star text--yellow mxr-5"></i>`;
//       }
//     }
//     content += `<div class="product__item">
//                   <div class="row-divide">
//                     <div class="col-divide-5 col-divide-md-12">
//                       <div class="product__item-img">
//                         <img src="${houseItem.node.featuredImage.sourceUrl}" alt="${houseItem.node.slug}" />
//                       </div>
//                     </div>
//                     <div class="col-divide-7 col-divide-md-12 align--self--center">
//                       <div class="product__item-content">
//                       <div class="product__item-title text--light text--upcase">
//                         ${houseItem.node.title}
//                       </div>
//                       <div class="product__item-check">
//                         ${starResult}
//                       </div>
//                       <div class="product__item-price text--light">
//                         <span>${houseItem.node.DuAn.priceProduct}</span>
//                       </div>
//                       <div class="product__item-map">
//                         <a href="${houseItem.node.DuAn.urlAddressProduct}" target="_blank" class="text--light" rel="noopener noreferrer">
//                         <i class="fas fa-map-marker-alt text--yellow mx-5"></i>                        ${houseItem.node.DuAn.addressProduct}
//                         </a>
//                       </div>
//                       <div class="row-divide">
//                         <div class="col-divide-6 text--light">
//                           <span class="text--yellow">Diện tích:</span> ${houseItem.node.DuAn.squareProduct}
//                         </div>
//                         <div class="col-divide-6 text--light">
//                           <span class="text--yellow">Thể loại:</span> ${houseTypeItemContent}
//                         </div>
//                         ${conventProducContent}
//                       </div>
//                       <div class="product__item-ques">
//                         <span class="text--upcase">${houseItem.node.DuAn.quesProduct}</span>
//                       </div>
//                       <div class="product__item-link text--right">
//                         <a href="${houseItem.node.link}" class="text--italic text--light">
//                           Xem thêm
//                         </a>
//                       </div>
//                       </div>
//                     </div>
//                   </div>
//                   </div>`;
//     return content;
//    }
//   });
//  houseListContent.innerHTML = content;
//  jQuery('.product__list').slick({
//    slidesToShow: 1,
//    slidesToScroll: 1,
//    fade: true,
//    cssEase: 'linear',
//    speed: 500,
//    autoplay: true,
//    autoplaySpeed: 3000,
//    infinite: true,
//  });
// }
