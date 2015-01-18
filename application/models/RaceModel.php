<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RaceModel extends CI_Model {

    private $table = 'race';
    private $table_i18n = 'race_i18n';
    private $table_card_race = 'card_race';

    function __construct()
    {
        parent::__construct();
    }

    public function init()
    {

        die('debug only');
        
        $data = array(

            'ja' => array(
                array('race_name' => "アウトレイジ",),
                array('race_name' => "アウトレイジMAX",),
                array('race_name' => "アウトレイジOMG",),
                array('race_name' => "アポロニア・ドラゴン",),
                array('race_name' => "アンノイズ",),
                array('race_name' => "アンノウン",),
                array('race_name' => "アーク・セラフィム",),
                array('race_name' => "アースイーター",),
                array('race_name' => "アース・ドラゴン",),
                array('race_name' => "アーマロイド",),
                array('race_name' => "アーマード・ドラゴン",),
                array('race_name' => "アーマード・ワイバーン",),
                array('race_name' => "イニシエート",),
                array('race_name' => "エイリアン",),
                array('race_name' => "エメラルド・モンスター",),
                array('race_name' => "エンジェル・コマンド",),
                array('race_name' => "エンジェル・コマンド・ドラゴン",),
                array('race_name' => "オラクリオン",),
                array('race_name' => "オラクル",),
                array('race_name' => "オリジン",),
                array('race_name' => "カレーパン",),
                array('race_name' => "ガイア・コマンド",),
                array('race_name' => "ガイアール・コマンド・ドラゴン",),
                array('race_name' => "ガーディアン",),
                array('race_name' => "キカイヒーロー",),
                array('race_name' => "キング・コマンド・ドラゴン",),
                array('race_name' => "クリスタル・コマンド・ドラゴン",),
                array('race_name' => "グラディエーター",),
                array('race_name' => "グランド・デビル",),
                array('race_name' => "グレートメカオー",),
                array('race_name' => "ゲル・フィッシュ",),
                array('race_name' => "コスモ・ウォーカー",),
                array('race_name' => "コロニー・ビートル",),
                array('race_name' => "ゴッド",),
                array('race_name' => "ゴッド・ノヴァ",),
                array('race_name' => "ゴッド・ノヴァOMG",),
                array('race_name' => "ゴースト",),
                array('race_name' => "サイバーロード",),
                array('race_name' => "サイバー・ウィルス",),
                array('race_name' => "サイバー・コマンド",),
                array('race_name' => "サイバー・ムーン",),
                array('race_name' => "サバイバー",),
                array('race_name' => "サムライ",),
                array('race_name' => "シノビ",),
                array('race_name' => "シャイニング・コマンド・ドラゴン",),
                array('race_name' => "シャイン・モンスター",),
                array('race_name' => "ジャイアント",),
                array('race_name' => "ジャイアント・インセクト",),
                array('race_name' => "ジャスティス・ウィング",),
                array('race_name' => "ジュラシック・コマンド・ドラゴン",),
                array('race_name' => "スノーフェアリー",),
                array('race_name' => "スピリット・クォーツ",),
                array('race_name' => "スプラッシュ・クイーン",),
                array('race_name' => "ゼニス",),
                array('race_name' => "ゼノパーツ",),
                array('race_name' => "ダイナモ",),
                array('race_name' => "ダークロード",),
                array('race_name' => "ダーク・モンスター",),
                array('race_name' => "チルドレン",),
                array('race_name' => "ティラノ・ドレイク",),
                array('race_name' => "デスパペット",),
                array('race_name' => "デビル・コマンド・ドラゴン",),
                array('race_name' => "デーモン・コマンド",),
                array('race_name' => "デーモン・コマンド・ドラゴン",),
                array('race_name' => "トライストーン",),
                array('race_name' => "ドラグナー",),
                array('race_name' => "ドラゴノイド",),
                array('race_name' => "ドラゴン・ゾンビ",),
                array('race_name' => "ドリームメイト",),
                array('race_name' => "ナイト",),
                array('race_name' => "ハンター",),
                array('race_name' => "バルーン・マッシュルーム",),
                array('race_name' => "バーサーカー",),
                array('race_name' => "パラサイトワーム",),
                array('race_name' => "パンドラボックス",),
                array('race_name' => "ヒューマノイド",),
                array('race_name' => "ヒューマノイド爆",),
                array('race_name' => "ヒーロー",),
                array('race_name' => "ビークル・ビー",),
                array('race_name' => "ビーストフォーク",),
                array('race_name' => "ビーストフォーク號",),
                array('race_name' => "ビースト・コマンド",),
                array('race_name' => "ファイアー・バード",),
                array('race_name' => "ファンキー・ナイトメア",),
                array('race_name' => "フェニックス",),
                array('race_name' => "フレイム・コマンド",),
                array('race_name' => "フレイム・モンスター",),
                array('race_name' => "ブラック・コマンド・ドラゴン",),
                array('race_name' => "ブルー・コマンド・ドラゴン",),
                array('race_name' => "ブルー・モンスター",),
                array('race_name' => "ブレイブ・スピリット",),
                array('race_name' => "ブレインジャッカー",),
                array('race_name' => "ヘドリアン",),
                array('race_name' => "ホワイト・コマンド・ドラゴン",),
                array('race_name' => "ホーン・ビースト",),
                array('race_name' => "ボルケーノ・ドラゴン",),
                array('race_name' => "ポセイディア・ドラゴン",),
                array('race_name' => "マジカル・モンスター",),
                array('race_name' => "マーフォーク",),
                array('race_name' => "ミステリー・トーテム",),
                array('race_name' => "メカ・デル・ソル",),
                array('race_name' => "メルト・ウォリアー",),
                array('race_name' => "ライトブリンガー",),
                array('race_name' => "リキシ・コマンド・ドラゴン",),
                array('race_name' => "リキッド・ピープル",),
                array('race_name' => "リキッド・ピープル閃",),
                array('race_name' => "リビング・デッド",),
                array('race_name' => "ルナティック・エンペラー",),
                array('race_name' => "ルナーズ・サンガイザー",),
                array('race_name' => "レインボー・コマンド・ドラゴン",),
                array('race_name' => "レインボー・ファントム",),
                array('race_name' => "レッド・コマンド・ドラゴン",),
                array('race_name' => "ロスト・クルセイダー",),
                array('race_name' => "ロック・ビースト",),
                array('race_name' => "ワイルド・ベジーズ",),
                array('race_name' => "ワンダー・トリック",),
                array('race_name' => "ワールド・コマンド",),
            ),
        );

        $this->db->trans_start();

        foreach($data as $key => &$value)
        {
            foreach($value as $race)
            {
                $this->create_race($race['race_name']);
            }
        }

        $this->db->trans_complete();
    }

    public function get_all_race()
    {
        $this->db->join($this->table_i18n, 'race_id = race_i18n_race_id', 'left')
                    ->select('race_id, race_name');
        return $this->db->get($this->table)->result_array();
    }

    public function join()
    {
        $this->db->select('GROUP_CONCAT(race_name SEPARATOR " / ") as races', false)
                 ->from($this->table)
                 ->join($this->table_i18n, 'race_id = race_i18n_race_id')
                 ->join($this->table_card_race, 'card_race_card_id = card_id and card_race_race_id = race_id');

        return true;
    }

    public function create_race($race_name, $locale = 'ja')
    {
        //insert
        $this->db->insert($this->table, array('dummy' => 'a'));

        $data = array(
            'race_i18n_race_id' => $this->db->insert_id(),
            'locale' => $locale,
            'race_name' => $race_name,
        );

        $this->db->insert($this->table_i18n, $data);

        return $this->db->affected_rows();
    }

    public function update_race()
    {
        //Update
    }

    public function delete_race()
    {
        //Delete
    }
}