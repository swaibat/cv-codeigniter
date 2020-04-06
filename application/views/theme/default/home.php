

<?php $theme_dir                      =   'theme/default/'; ?>
<?php if($this->common_model->get_ads_status('home_header')=='1'): ?>
<!-- header ads -->
<div id="ads" style="padding: 20px 0px;text-align: center;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <?php echo $this->common_model->get_ads('home_header'); ?>
            </div>
        </div>
    </div>
</div>
<!-- header ads -->
<?php endif; ?>

<div id="section-opt">
    <div class="container">
        <div class="movies-list-wrap mlw-latestmovie">
            <div class="ml-title">
                <span class="pull-left title"><?php echo trans('movie_suggestion'); ?></span>
                <a href="<?php echo base_url(); ?>movies.html" class="pull-right cat-more"><?php echo trans('view_more'); ?> »</a>
                <ul role="tablist" class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" role="tab" href="#hot" aria-expanded="true"><?php echo trans('popular'); ?></a></li>
                    <li class=""><a data-toggle="tab" role="tab" href="#top-today" aria-expanded="false"><?php echo trans('top_view_today'); ?></a></li>
                    <li><a data-toggle="tab" role="tab" href="#top-weekly" aria-expanded="false"><?php echo trans('top_view_weekly'); ?></a></li>
                    <li class=""><a data-toggle="tab" role="tab" href="#top-rating" aria-expanded="false"><?php echo trans('top_rating'); ?></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="tab-content">
                <!-- hot -->
                <div id="hot" class="movies-list movies-list-full tab-pane fade active in">
                    <div class="row clean-preset">
                        <div class="movie-container">
                            <?php $hot_videos = $this->common_model->get_hot_videos(); ?>
                            <?php foreach ($hot_videos as $videos) :?>
                            <div class="col-md-2 col-sm-3 col-xs-6">
                                <?php include('thumbnail.php'); ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>


                <!-- top-today -->
                <div id="top-today" class="movies-list movies-list-full tab-pane fade in">
                    <div class="row clean-preset">
                        <div class="movie-container">
                            <?php $top_today = $this->common_model->get_today_hot_videos(); ?>
                            <?php foreach ($top_today as $videos) :?>
                            <div class="col-md-2 col-sm-3 col-xs-6">
                                <?php include('thumbnail.php'); ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- top-weekly -->
                <div id="top-weekly" class="movies-list movies-list-full tab-pane fade in">
                    <div class="row clean-preset">
                        <div class="movie-container">
                            <?php $top_rated_videos = $this->common_model->get_weekly_hot_videos(); ?>
                            <?php foreach ($top_rated_videos as $videos) :?>
                            <div class="col-md-2 col-sm-3 col-xs-6">
                                <?php include('thumbnail.php'); ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>


                <!-- top-rated -->
                <div id="top-rating" class="movies-list movies-list-full tab-pane fade in">
                    <div class="row clean-preset">
                        <div class="movie-container">
                            <?php $top_rated_videos = $this->common_model->get_top_rated_videos(); ?>
                            <?php foreach ($top_rated_videos as $videos) :?>
                            <div class="col-md-2 col-sm-3 col-xs-6">
                                <?php include('thumbnail.php'); ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<div id="section-opt">
    <div class="container">
        <div class="movies-list-wrap mlw-latestmovie">
            <div class="ml-title m-b-10">
                <span class="pull-left title"><?php echo trans('latest_movies'); ?></span>
                <a href="<?php echo base_url('movies.html') ?>" class="pull-right cat-more"><?php echo trans('view_more'); ?>e »</a>
                <ul role="tablist" class="nav nav-tabs">
                    
                    <li class="active">
                        <a data-toggle="tab" role="tab" href="#latest-all" aria-expanded="true"><?php echo trans('all'); ?></a>
                    </li>
                    <?php
                        $featured_genres = $this->common_model->get_features_genres(6);
                        foreach ($featured_genres as $genre) :
                    ?>
                    <li class="">
                        <a data-toggle="tab" role="tab" href="#<?php echo $genre['slug']; ?>" aria-expanded="false"><?php echo $genre['name'] ?></a>
                    </li>
                <?php endforeach; ?>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="tab-content">
                <div id="latest-all" class="movies-list movies-list-full tab-pane fade active in">
                    <div class="row clean-preset">
                        <div class="movie-container">
                            <?php
                                $latest_published_videos = $this->common_model->latest_published_videos();
                                foreach ($latest_published_videos as $videos) :
                            ?>
                            <div class="col-md-2 col-sm-3 col-xs-6">
                                <?php include('thumbnail.php'); ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <?php
                    $featured_genres = $this->common_model->get_features_genres(6);
                    foreach ($featured_genres as $genre) :
                ?>
                <div id="<?php echo $genre['slug']; ?>" class="movies-list movies-list-full tab-pane fade">
                    <div class="row clean-preset">
                        <div class="movie-container">
                            <?php
                                $genre_videos = $this->genre_model->get_video_by_genre_id($genre['genre_id']);
                                foreach ($genre_videos as $videos) :
                            ?>
                            <div class="col-md-2 col-sm-3 col-xs-6">
                                <?php include('thumbnail.php'); ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>


<?php 
  $tv_series_publish          = $this->db->get_where('config',array('title'=>'tv_series_publish'))->row()->value;
  if($tv_series_publish =='1'):
?>

<div id="section-opt">
    <div class="container">
        <div class="movies-list-wrap mlw-latestmovie">
            <div class="ml-title">
                <span class="pull-left title"><?php echo trans('tv_series_suggestion'); ?></span>
                <a href="<?php echo base_url(); ?>tv-series.html" class="pull-right cat-more"><?php echo trans('view_more'); ?> »</a>
                <ul role="tablist" class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" role="tab" href="#hot-tvseries" aria-expanded="true"><?php echo trans('popular'); ?></a></li>
                    <li class=""><a data-toggle="tab" role="tab" href="#top-today-tvseries" aria-expanded="false"><?php echo trans('top_view_today'); ?></a></li>
                    <li><a data-toggle="tab" role="tab" href="#top-weekly-tvseries" aria-expanded="false"><?php echo trans('top_view_weekly'); ?></a></li>
                    <li class=""><a data-toggle="tab" role="tab" href="#top-rating-tvseries" aria-expanded="false"><?php echo trans('top_rating'); ?></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="tab-content">
                <!-- hot -->
                <div id="hot-tvseries" class="movies-list movies-list-full tab-pane fade active in">
                    <div class="row clean-preset">
                        <div class="movie-container">
                            <?php $hot_videos = $this->common_model->get_hot_tvseries(); ?>
                            <?php foreach ($hot_videos as $videos) :?>
                            <div class="col-md-2 col-sm-3 col-xs-6">
                                <?php include('thumbnail.php'); ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>


                <!-- top-today -->
                <div id="top-today-tvseries" class="movies-list movies-list-full tab-pane fade in">
                    <div class="row clean-preset">
                        <div class="movie-container">
                            <?php $top_today = $this->common_model->get_today_hot_tvseries(); ?>
                            <?php foreach ($top_today as $videos) :?>
                            <div class="col-md-2 col-sm-3 col-xs-6">
                                <?php include('thumbnail.php'); ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- top-today -->
                <div id="top-weekly-tvseries" class="movies-list movies-list-full tab-pane fade in">
                    <div class="row clean-preset">
                        <div class="movie-container">
                            <?php $top_rated_videos = $this->common_model->get_weekly_hot_tvseries(); ?>
                            <?php foreach ($top_rated_videos as $videos) :?>
                            <div class="col-md-2 col-sm-3 col-xs-6">
                                <?php include('thumbnail.php'); ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>


                <!-- top-today -->
                <div id="top-rating-tvseries" class="movies-list movies-list-full tab-pane fade in">
                    <div class="row clean-preset">
                        <div class="movie-container">
                            <?php $top_rated_videos = $this->common_model->get_top_rated_tvseries(); ?>
                            <?php foreach ($top_rated_videos as $videos) :?>
                            <div class="col-md-2 col-sm-3 col-xs-6">
                                <?php include('thumbnail.php'); ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>


<div id="section-opt">
    <div class="container">
        <div class="movies-list-wrap mlw-latestmovie">
            <div class="ml-title m-b-10">
                <span class="pull-left title"><?php echo trans('latest_tv_series'); ?></span>
                <a href="<?php echo base_url('tv-series.html') ?>" class="pull-right cat-more"><?php echo trans('view_more'); ?> »</a>
                <ul role="tablist" class="nav nav-tabs">
                    
                    <li class="active">
                        <a data-toggle="tab" role="tab" href="#latest-all-tvseries" aria-expanded="true"><?php echo trans('all'); ?></a>
                    </li>
                    <?php
                        $featured_genres = $this->common_model->get_features_genres(6);
                        foreach ($featured_genres as $genre) :
                    ?>
                    <li class="">
                        <a data-toggle="tab" role="tab" href="#<?php echo $genre['slug']; ?>-tvseries" aria-expanded="false"><?php echo $genre['name'] ?></a>
                    </li>
                <?php endforeach; ?>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="tab-content">
                <div id="latest-all-tvseries" class="movies-list movies-list-full tab-pane fade active in">
                    <div class="row clean-preset">
                        <div class="movie-container">
                            <?php
                                $latest_published_videos = $this->common_model->latest_published_tv_series();
                                foreach ($latest_published_videos as $videos) :
                            ?>
                            <div class="col-md-2 col-sm-3 col-xs-6">
                                <?php include('thumbnail.php'); ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <?php
                    $featured_genres = $this->common_model->get_features_genres(6);
                    foreach ($featured_genres as $genre) :
                ?>
                <div id="<?php echo $genre['slug']; ?>-tvseries" class="movies-list movies-list-full tab-pane fade">
                    <div class="row clean-preset">
                        <div class="movie-container">
                            <?php
                                $genre_videos = $this->genre_model->get_tvseries_by_genre_id($genre['genre_id']);
                                foreach ($genre_videos as $videos) :
                            ?>
                            <div class="col-md-2 col-sm-3 col-xs-6">
                                <?php include('thumbnail.php'); ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
