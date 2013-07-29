<?php

/**
 * BaseTimesheetActionLog
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $timesheetActionLogId
 * @property integer $timesheetId
 * @property string $performedBy
 * @property string $action
 * @property string $comment
 * @property date $dateTime
 * @property Timesheet $Timesheet
 * @property SystemUser $Users
 * 
 * @method integer            getTimesheetActionLogId() Returns the current record's "timesheetActionLogId" value
 * @method integer            getTimesheetId()          Returns the current record's "timesheetId" value
 * @method string             getPerformedBy()          Returns the current record's "performedBy" value
 * @method string             getAction()               Returns the current record's "action" value
 * @method string             getComment()              Returns the current record's "comment" value
 * @method date               getDateTime()             Returns the current record's "dateTime" value
 * @method Timesheet          getTimesheet()            Returns the current record's "Timesheet" value
 * @method SystemUser         getUsers()                Returns the current record's "Users" value
 * @method TimesheetActionLog setTimesheetActionLogId() Sets the current record's "timesheetActionLogId" value
 * @method TimesheetActionLog setTimesheetId()          Sets the current record's "timesheetId" value
 * @method TimesheetActionLog setPerformedBy()          Sets the current record's "performedBy" value
 * @method TimesheetActionLog setAction()               Sets the current record's "action" value
 * @method TimesheetActionLog setComment()              Sets the current record's "comment" value
 * @method TimesheetActionLog setDateTime()             Sets the current record's "dateTime" value
 * @method TimesheetActionLog setTimesheet()            Sets the current record's "Timesheet" value
 * @method TimesheetActionLog setUsers()                Sets the current record's "Users" value
 * 
 * @package    orangehrm
 * @subpackage model\time\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTimesheetActionLog extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_timesheet_action_log');
        $this->hasColumn('timesheet_action_log_id as timesheetActionLogId', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('timesheet_id as timesheetId', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('performed_by as performedBy', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('action', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('comment', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('date_time as dateTime', 'date', null, array(
             'type' => 'date',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Timesheet', array(
             'local' => 'timesheet_id',
             'foreign' => 'timesheetId',
             'onDelete' => 'cascade'));

        $this->hasOne('SystemUser as Users', array(
             'local' => 'performed_by',
             'foreign' => 'id',
             'onDelete' => 'cascade'));
    }
}