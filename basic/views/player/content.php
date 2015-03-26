<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Trentino Meteo';
$this->registerJsFile(Yii::getAlias('@web').'/js/player.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>
<div class="site-about">
    <h1>Broadcast: <?= Html::encode($this->title) ?></h1>

    <h5><i class="glyphicon glyphicon-play-circle"></i> <strong>Scheduled:</strong> 16:00 - 16:10</h5>
    <div class="progress">
        <div class="progress-bar progress-bar-striped" role="progress-bar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
        </div>
    </div>

    <hr/>

    <div class="contentPanel">

        <div class="media" id="media_item_2">
            <div class="media-body">
                <h4 class="media-heading">
                    Weather forecast <small>[5:45]</small>
                </h4>
                <ul class="list-group">
                    <li class="list-group-item">
                        Extended weather forecast provided by
                        <a href="http://www.meteotrentino.it/bollettini/today/generale_it.aspx?id=7" target="_blank">Meteo Trentino (meteotrentino.it)</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="media" id="media_item_1">
            <div class="media-left">
                <a href="#">
                    <img class="media-object" src="images/paganella.JPG" alt="..." />
                </a>
            </div>
            <div class="media-body">
                <h4 class="media-heading">
                    Dolomiti di Brenta <small>[02:23]</small>
                </h4>
                <ul class="list-group">
                    <li class="list-group-item">
                        Trentino Tourism
                    </li>
                    <li class="list-group-item">
                        Skiing at Paganella
                    </li>
                    <li class="list-group-item">
                        Monte Bondone
                    </li>
                </ul>
            </div>
        </div>

        <div class="alert alert-info">
            Welcome to Horus.TV second screen. Related content to the show `<?=$this->title?>` will show up here.
        </div>

    </div>

</div>
