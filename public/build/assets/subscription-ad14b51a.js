var p,v,s,l=!1,e,a,i,u,r,f,d;$(document).ready(function(){C(),g(),d=$("#subscribe-confirm"),d.on("shown.bs.modal",()=>{k()})});function C(){let o=$("#stripe-token");p=Stripe(o.val()),v=p.elements()}function k(){if(e=$(".subscription-confirm-button"),$("#card-element").length===1){if(!s){let t={base:{color:"#555555",fontFamily:'"Helvetica Neue", Helvetica, sans-serif',fontSmoothing:"antialiased",fontSize:"14px","::placeholder":{color:"#777777"}},invalid:{color:"#fa755a",iconColor:"#fa755a"}};s=v.create("card",{hidePostalCode:!0,style:t})}s.mount("#card-element")}$("#subscription-confirm").submit(function(t){if(l)return!0;t.preventDefault(),e.addClass("disabled"),e.find("span").hide(),e.find(".spinner").show();let n=$('input[name="subscription-intent-token"]'),m=$(".alert-danger");m.hide();let h=$('input[name="payment_id"]');if(h.val())return l=!0,$("#subscription-confirm").submit(),!1;p.confirmCardSetup(n.val(),{payment_method:{card:s,billing_details:{name:$('input[name="card-holder-name"]').val()}}}).then(function(c){if(c.error)return e.removeClass("disabled").text(e.data("text")),m.text(c.error.message).show(),!1;h.val(c.setupIntent.payment_method),l=!0,$("#subscription-confirm").submit()}.bind(this))}),$(".subscription-form").submit(function(){return e.addClass("disabled").find("span").hide().parent().find(".spinner").show(),!0}),a=$("#coupon-check-btn"),i=$("#coupon-check"),u=$("#coupon-success"),r=$("#coupon-invalid"),f=$("#coupon"),a.click(function(){b()}),i.change(function(){b()}),i.focus(function(){e.addClass("disabled").prop("disabled",!0)}),i.focusout(function(){i.val()||e.removeClass("disabled").prop("disabled",!1)})}function b(){let o=i.val(),t=i.data("url");a.prop("disabled",!0).find(".check").hide().parent().find(".spinner").show(),o||e.removeClass("disabled").prop("disabled",!1),$.ajax({url:t+"?coupon="+o,context:this}).done(function(n){if(a.prop("disabled",!1).find(".check").show().parent().find(".spinner").hide(),e.removeClass("disabled").prop("disabled",!1),!n.valid){u.hide(),r.html(n.error).show(),f.val(""),d.removeClass("valid-coupon");return}r.hide(),u.html(n.discount).show(),f.val(n.coupon),d.addClass("valid-coupon")}).fail(function(n){a.prop("disabled",!1).find(".check").show().parent().find(".spinner").hide(),n.responseJSON&&r.html(n.responseJSON.message).show()})}function g(){$('input[name="period"]').change(function(){let o=$("#pricing-overview");console.log("checked?",this.checked),this.checked?o.removeClass("period-month").addClass("period-year"):o.removeClass("period-year").addClass("period-month")})}