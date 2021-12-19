<?php

use yii\db\Migration;

/**
 * Class m211219_162816_role
 */
class m211219_162816_role extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $auth = Yii::$app->authManager;

        //define roles

        $moderatorRole = $auth->createRole('moderator');
        $auth->add($moderatorRole);

        $adminRole = $auth->createRole('administrator');
        $auth->add($adminRole);

        $auth->addChild($adminRole, $moderatorRole);

        $auth->assign($adminRole, 1);
    }
}
