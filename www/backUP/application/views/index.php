<!-- beginning of content -->    
	<div class="left">        
        <div class="process-container">
        	<div class="slider-wrapper theme-default">
                <div id="process" class="nivoSlider">
                    <img src="/img/process/1.jpg" alt="" title="#slider-slide-1" />
                    <img src="/img/process/2.jpg" alt="" title="#slider-slide-2" />
                    <img src="/img/process/3.jpg" alt="" title="#slider-slide-3" />
                    <img src="/img/process/4.jpg" alt="" title="#slider-slide-4" />                    
                </div>
                <div id="slider-slide-1" class="slider-caption"><strong>Sign up!</strong></div>
                <div id="slider-slide-2" class="slider-caption">Friends send you <strong>letters</strong>, companies send you <strong>bills</strong></div>   
				<div id="slider-slide-3" class="slider-caption">We <strong>scan</strong> them for you...</div>                             
                <div id="slider-slide-4" class="slider-caption">... and you receive them in your inbox or online - <strong>anywhere!</strong></div>
            </div>        
        </div>
        <div class="clear"></div>    
        <div class="testimonials-container">
			<div class="testimonials-box content-box">
            	<table class="testimonials-table">
                	<tr>
                    	<td><img src="/img/testimonials/user1-0.jpg" alt="" height="80" id="user1-" /></td>
                        <td>
                        	<h2>Gabriel N.</h2>
                            <p>eSnail has helped me in a huge way. I went backpacking through South America and had I not used it, I would have completely forgotten to pay the electricity bill.</p>
                        </td>
                    </tr>
                	<tr>
                    	<td><img src="/img/testimonials/user2-0.jpg" alt="" height="80" id="user2-" /></td>
                        <td>
                        	<h2>Michael Doe</h2>
                            <p>Had I not signed up for eSnail before I went for a holiday, I would have missed the arrival of the concert tickets I ordered for my nephew.  Luckily I saw them in my inbox and he was able to pick them up before the concert!</p>
                        </td>
                    </tr>
                	<tr>
                    	<td><img src="/img/testimonials/user3-0.jpg" alt="" height="80" id="user3-" /></td>
                        <td>
                        	<h2>Sophie Devereaux</h2>
                            <p>I've been using eSnail for the past 6 months in order to get my Cosomopolitan subscription in pdf format and I love it.</p>
                        </td>
                    </tr>                  
                    <tr>
                    	<td colspan="2">
                        	<a href="/testimonials/">More testimonials</a>
                        </td>
                    </tr>                   
                </table>
            </div>    
        </div>
        
        <div class="faq-home-container">
        	<h1>What if...</h1>
            
            <div class="faq-home-box content-box">
            	
                <h2>...I want to receive magazines by eSnail?</h2>
                <p>No problem! If you would like to subscribe to a magazine using your eSnail Box we will notify you when you have mail and either forward it to you for a $5 forwarding fee, or colour scan it for you for only $1.50 Please note that scanning the magazine will destroy the bindings.</p>
                
				<hr />
                
            	<h2>...I move or travel?</h2>
                <p>You receive mail addressed to your eSnail account wherever you have access to the internet. Your account goes wherever you go!</p>
                
                <hr />
                
				<h2>...I receive junkmail?</h2>
                <p>Because our scanning process is automated, we will scan and email all mail that is addressed under the name you registered with eSnail.ca This may include fliers and lettermail.</p>    
                <br />
                <div class="faq-home-button-all">
                	<a href="/faq/">More Frequently Asked Questions</a>
                </div>
                            
            </div>            
            
        </div>          

        <div class="entries-container">
        	<h1>Latest entries</h1>
            <div class="entries-box content-box">
   			<?php $i=0; foreach($news as $n): ?>         
            	<div class="entries-single">
                    <div class="single-entry-date">
                    	<h2><?=$n->title;?></h2>
                        <?=$n->date_month.' '.$n->date_day.'<sup>'.$n->date_suffix.'</sup>, '.$n->date_year;?>
                    </div>                
                    
                    <p>
                        <?=$n->excerpt;?><p class="entries-link-more"><a href="/blog/">Read more</a></p>
                    </p>
                </div>
                <?=($i==0)?'<hr>':'';?>
            <?php $i++; endforeach; ?>
                
                <div class="entries-button-all">
                	<a href="/blog/">More blog entries</a>
                </div>
                    
            </div>
        </div>
        
	</div>  
    
    <div class="right">      
        <div class="plans-container">
            <div class="plans-box content-box">
            
            	<h2>Basic Plan</h2>
                <ul>
                	<li>Pay a fixed amount per month. Searchable PDF.</li><li>20 pieces of mail per month</li>
                    <li>9.99$ / month</li>
                </ul>
                <a href="/register/?plan=2" class="order-button">Order Now</a>
                
           	  <h2>Personal Plan</h2>
                <ul>
                	<li>Pay a fixed amount per month. Searchable PDF.</li>
                    <li>100 pieces of mail per month</li>
                    <li>19.99$ / month</li>
                </ul>
                <a href="/register/?plan=3" class="order-button">Order Now</a>               
                <p>&nbsp;</p>
                <div class="plans-button-all">
                	<a href="/plans/">More plans and services</a>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="content-box paypal-box">
        	<img src="/img/paypal-icon.png" alt="PayPal" />
        </div>       
        <!--
        <div class="content-box offer-box">
            <a href="/register/?plan=6">
                <img src="http://lorempixum.com/300/150">
            </a>
        </div>
        --> 
     </div>
		<div class="clear"></div>
	</div> 
</div>
<!-- end of content -->
<div class="pre-footer">
	<div class="wrapper">
    	<h1>Features</h1>
    	
        <div class="service">
        	<a href="/plans/">
	    		<img title="Package forwarding" alt="" src="/img/services/packages.jpg" />
            	<h3>Package forwarding</h3>
           	</a>
        </div>
        
        <div class="service">
        	<a href="/plans/">
	    		<img title="Document forwarding" alt="" src="/img/services/documents.jpg" />
            	<h3>Documents forwarding</h3>
           	</a>
        </div>        
        
        <div class="service">
        	<a href="/plans/">
	    		<img title="Scan and forward magazines" alt="" src="/img/services/magazines.jpg" />
            	<h3>Scan and forward magazines</h3>
           	</a>
        </div>  

        <div class="service">
        	<a href="/plans/">
	    		<img title="Immediate forwarding of cheques" alt="" src="/img/services/cheques.jpg" />
            	<h3>Immediate forwarding of cheques</h3>
           	</a>
        </div>  

        <div class="service">
        	<a href="/plans/">
	    		<img title="Full colour scanning" alt="" src="/img/services/colours.jpg" />
            	<h3>Full colour scanning</h3>
           	</a>
        </div>  

        <div class="service">
        	<a href="/plans/">
	    		<img title="Secure shredding of old mail" alt="" src="/img/services/shred.jpg" class="last" />
            	<h3>Secure shredding of old mail</h3>
           	</a>
        </div> 
        
        <div class="clear"></div>