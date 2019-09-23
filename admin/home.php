<?php
include("header.php");
?>
		
        <head>
<style>
    
 #main{
        float: left;
        background-color: coral;
        width: 70%;
        padding: 0 30px;
        box-sizing: border-box;
        color: black;
    }
    #sidebar{
        float: right;
        width: 30%;
        background: #666666;
        color: #fff;
        padding: 10px;
        box-sizing: border-box;
    }
    @media(max-width:600px){
        #main{
            width: 100%;
            float: none;
        }
        #sidebar{
            width: 100%;
            float: none;
        }
    }
</style>
</head>

<div class="container">
    <section id="main">
        <h1>
                WELCOME TO ADMIN DASHBOARD
        </h1>
        <p>
                Salary is only one part of compensation. For s
                ome positions it’s not even the largest component.
                For instance, senior positions at big tech companies
                often have an equity component that equals or exceeds
                the salary component. Equity can be tricky to understand 
                (a $200k equity package might sound like a lot but if i
                t vests over five years that’s $40k annually). Moreover,
                 because of price fluctuations, it’s not always clear 
                 how it will affect one’s overall financial situation.
        <br>
                Commissions and bonuses should also be figured into 
                total compensation. As with equity, these figures can be tough 
                to predict. I’ve known a few recruiters who like to focus on the 
                high end of the upside rather than median values. While it may be possible
                 to get $100k+ in bonuses at Google, the typical
                  developer gets a much more modest 15% of their
                   base salary.
        </p>

    </section>
    <aside id="sidebar">
        <p>
                Commissions and bonuses should also be figured into 
                total compensation. As with equity, these figures can be tough 
                to predict. I’ve known a few recruiters who like to focus on the 
                high end of the upside rather than median values. While it may be possible
                 to get $100k+ in bonuses at Google, the typical
                  developer gets a much more modest 15% of their
                   base salary.
                   Commissions and bonuses should also be figured into 
                   total compensation. As with equity, these figures can be tough 
                   to predict. I’ve known a few recruiters who like to focus on the 
                   high end of the upside rather than median values. While it may be possible
                    to get $100k+ in bonuses at Google, the typical
                     developer gets a much more modest 15% of their
                      base salary.
        </p>
    </aside>

</div>

<?php
include("footer.php");
?>
		