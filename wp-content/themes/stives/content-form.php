     <!-- === CONTACT TEXT SECTION === {{{3 -->

    <section class="contactText">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                <p><?php  if (have_posts()) :
                   while (have_posts()) :
                      the_post();
                     the_content();
                   endwhile;
                endif;?></p>
                            
                </div>
            </div>
        </div>
    </section>
     <!-- === CONTACT FORM SECTION === {{{3 -->
     
     <section class="contactForm">
         <!-- .container contactFormCont -->
         <div class="container contactFormCont">
             <div class="row">
                 <div class="col-md-6 col-md-offset-3">
                     <form>
                         <div class="form-group">
                             <div class="input-group">
                               <span class="input-group-addon">Name *</span>
                               <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                             </div>
                         </div>
                         <div class="form-group">
                             <div class="input-group">
                               <span class="input-group-addon">Email *</span>
                               <input type="email" class="form-control" aria-label="Amount (to the nearest dollar)">
                             </div>
                         </div>
                         <div class="form-group">
                             <div class="input-group">
                               <span class="input-group-addon">Contact Number *</span>
                               <input type="tel" class="form-control" aria-label="Amount (to the nearest dollar)">
                             </div>
                         </div>
                         <div class="form-group">
                             <div class="input-group">
                               <span class="input-group-addon">Subject *</span>
                               <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                             </div>
                         </div>
                         <div class="form-group">
                             <div class="input-group">
                               <span class="input-group-addon">Message *</span>
                               <textarea  class="form-control" aria-label="Amount (to the nearest dollar)">
                               </textarea>
                             </div>
                         </div>
                         <button type="submit" class="btn btn-default" >Submit</button>
                     </form>
                 </div>
             </div>
         </div>
     </section>
