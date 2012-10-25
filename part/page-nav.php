
    <div class="row-fluid moreBtn">
        <span class="span8"><!-- Ajax Load More -->
          <button class="btn btn-block"><h2>Load More Tweet Memories</h2></button>
        </span>
         <span class="span4"><!-- Ajax Load More -->
          <button class="btn btn-block" data-toggle="collapse" data-target="#pages"><h2>Go To Page ...</h2></button>
        </span>
    <div class="row-fluid">
        <div id="pages" class="collapse out">
            <span class="span12"><!-- Ajax Load More -->
              <button class="btn btn-block btn-link"><h2><?php kriesi_pagination();?></h2></button>
            </span>
        </div>
    </div>