// const renderProduct = () =>{
//   fetch('https://nhaphosg.admin.wolfactive.net/graphql', {
//     method: 'POST',
//     headers: {
//       'Content-Type': 'application/json',
//     },
//     body: JSON.stringify({
//       query: `
//               {
//             house_products {
//               edges {
//                 cursor
//                 node {
//                   featuredImage {
//                     sourceUrl
//                   }
//                   link
//                   slug
//                   title
//                   content(format: RENDERED)
//                   DuAn {
//                     addressProduct
//                     checkProduct
//                     convenProduct {
//                       nameConven
//                       numberConven
//                     }
//                     quesProduct
//                     squareProduct
//                     urlAddressProduct
//                     specialProduct
//                     priceProduct
//                   }
//                   terms {
//                     ... on Theloai {
//                       id
//                       name
//                       link
//                     }
//                   }
//                 }
//               }
//             }
//           }
//       `,
//     }),
//   })
//     .then(res => res.json())
//     .then(function(res){
//       displayProduct(res);
//     })
// }
