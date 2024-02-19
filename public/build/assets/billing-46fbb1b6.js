import{_ as y,c as r,h,s as m,a as t,F as _,r as g,t as i,d as b,v as M,b as f,e as S,o as c,w as v,l as P}from"./_plugin-vue_export-helper-c420bb3b.js";const w={props:["api_token","trans"],data(){return{stripe:"",elements:"",card:"",intentToken:"",name:"",addPaymentStatus:0,addPaymentStatusError:"",paymentMethods:[],paymentMethodsLoadStatus:0,paymentMethodSelected:0,showNewPaymentMethod:!1,savePaymentMethodStatus:0,deletingPaymentMethodStatus:0,json_trans:[],isLoading:!1}},mounted(){this.includeStripe("js.stripe.com/v3/",(function(){this.configureStripe()}).bind(this)),this.loadIntent(),this.loadPaymentMethods(),this.json_trans=JSON.parse(this.trans)},methods:{includeStripe(e,s){let d=document,l="script",o=d.createElement(l),a=d.getElementsByTagName(l)[0];o.src="https://"+e,s&&o.addEventListener("load",function(n){s(null,n)},!1),a.parentNode.insertBefore(o,a)},configureStripe(){this.stripe=Stripe(this.api_token),this.elements=this.stripe.elements(),this.card=this.elements.create("card",{hidePostalCode:!0}),this.card.mount("#card-element")},loadIntent(){axios.get("/subscription-api/setup-intent").then((function(e){this.intentToken=e.data}).bind(this))},submitPaymentMethod(){this.addPaymentStatus=1,this.savePaymentMethodStatus=1,this.isLoading=!0,console.log("wa"),this.stripe.confirmCardSetup(this.intentToken.client_secret,{payment_method:{card:this.card,billing_details:{name:this.name}}}).then((function(e){this.savePaymentMethodStatus=0,this.isLoading=!1,e.error?(console.log("error",e.error.message),this.addPaymentStatus=3,this.addPaymentStatusError=e.error.message):(this.savePaymentMethod(e.setupIntent.payment_method),this.addPaymentStatus=2,this.addPaymentStatusError="",this.card.clear(),this.name="",this.closeModal("cardModal"))}).bind(this))},savePaymentMethod(e){console.log("save?"),this.paymentMethodsLoadStatus=0,axios.post("/subscription-api/payments",{payment_method:e}).then((function(){console.log("what"),this.loadPaymentMethods()}).bind(this))},loadPaymentMethods(){this.paymentMethodsLoadStatus=1,axios.get("/subscription-api/payment-methods").then((function(e){this.paymentMethods=e.data,this.paymentMethodsLoadStatus=2}).bind(this))},removePaymentMethod(e){this.paymentMethodsLoadStatus=0,axios.post("/subscription-api/remove-payment",{id:e}).then((function(s){this.loadPaymentMethods()}).bind(this))},toggleShowNewPaymentMethod(){this.openModal("cardModal"),this.showNewPaymentMethod=!this.showNewPaymentMethod},translate(e){return this.json_trans[e]??"unknown"},openModal(e){this.$refs[e].showModal(),this.$refs[e].addEventListener("click",function(s){let d=this.getBoundingClientRect();!(d.top<=s.clientY&&s.clientY<=d.top+d.height&&d.left<=s.clientX&&s.clientX<=d.left+d.width)&&s.target.tagName==="DIALOG"&&this.close()})},closeModal(e){this.$refs[e].close()},saveBtnClass(){let e="btn2 btn-primary";return this.isLoading&&(e+=" loading"),e}}},x={class:"text-center"},k=t("i",{class:"fa-solid fa-spin fa-spinner"},null,-1),L=[k],C={class:"grow"},N={class:"font-extrabold"},E={class:""},B={class:""},T=["onClick"],j={class:"flex gap-2 mb-5"},I={class:"help-block text-neutral-content grow"},D=t("i",{class:"far fa-credit-card","aria-hidden":"true"},null,-1),V={class:"dialog rounded-2xl text-center",id:"modal-card",ref:"cardModal","aria-modal":"true","aria-labelledby":"modal-card-label"},A={id:"modal-card-label"},R=t("i",{class:"fa-solid fa-times","aria-hidden":"true"},null,-1),F=t("span",{class:"sr-only"},"Close",-1),H=[R,F],O={class:"text-justify"},U={class:"mb-2 w-full field"},X={class:"mb-2 w-full"},Y=t("div",{id:"card-element"},null,-1),z=["innerHTML"],G={class:"help-block text-neutral-content mb-2"},J={class:"grid grid-cols-2 gap-2"};function q(e,s,d,l,o,a){return c(),r("div",null,[h(t("div",x,L,512),[[m,o.paymentMethodsLoadStatus!=2]]),h(t("div",null,[(c(!0),r(_,null,g(o.paymentMethods,(n,p)=>(c(),r("div",{key:"method-"+p,class:"bg-box shadow-xs mb-5 p-4 rounded flex gap-2 md:gap-4"},[t("div",C,[t("div",N,i(n.brand.charAt(0).toUpperCase())+i(n.brand.slice(1))+" ending in "+i(n.last_four),1),t("div",E," Expires "+i(n.exp_month)+" "+i(n.exp_year),1)]),t("div",B,[t("button",{role:"button",onClick:v(Q=>a.removePaymentMethod(n.id),["stop"]),title:"Remove",class:"btn2 btn-outline btn-error btn-sm"}," Remove card ",8,T)])]))),128))],512),[[m,o.paymentMethodsLoadStatus==2&&o.paymentMethods.length>0]]),h(t("div",j,[t("p",I,i(a.translate("add_one")),1),t("a",{href:"#",onClick:s[0]||(s[0]=(...n)=>a.toggleShowNewPaymentMethod&&a.toggleShowNewPaymentMethod(...n)),class:"btn2 btn-secondary btn-sm"},[D,b(" "+i(a.translate("actions.add_new")),1)])],512),[[m,o.paymentMethodsLoadStatus==2&&o.paymentMethods.length==0]]),t("dialog",V,[t("header",null,[t("h4",A,i(a.translate("new_card")),1),t("button",{type:"button",class:"rounded-full",onClick:s[1]||(s[1]=n=>a.closeModal("accessModal")),title:"Close"},H)]),t("article",O,[t("div",U,[t("label",null,i(a.translate("card_name")),1),h(t("input",{id:"card-holder-name",type:"text","onUpdate:modelValue":s[2]||(s[2]=n=>o.name=n),class:"w-full"},null,512),[[M,o.name]])]),t("div",X,[t("label",null,i(a.translate("card")),1),Y,o.addPaymentStatusError?(c(),r("p",{key:0,class:"text-red-500 my-2",innerHTML:o.addPaymentStatusError},null,8,z)):f("",!0)]),t("p",G,i(a.translate("helper")),1),t("div",J,[t("button",{type:"button",class:"btn2 btn-ghost",onClick:s[3]||(s[3]=n=>a.closeModal("cardModal"))},"Close"),t("button",{type:"button",class:S(a.saveBtnClass()),onClick:s[4]||(s[4]=(...n)=>a.submitPaymentMethod&&a.submitPaymentMethod(...n)),ref:"formBtn"},i(a.translate("actions.save")),3)])])],512)])}const K=y(w,[["render",q]]),u=P({});u.component("billing-management",K);u.mount("#billing");
