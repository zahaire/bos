<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CORE_Controller extends CI_Controller
{
    private $data;

    public function __construct()
    {
        parent::__construct();
        $this->user();

        $this->data['title'] = 'Better Online Survey';
        $this->data['response'] = NULL;
        $this->data['userHeaders'] = [];
        $this->data['customHeaders'] = [];
        $this->data['userFooters'] = [];
        $this->data['customFooters'] = [];
    }

    #region User Sessions

    public function user()
    {
        if ($this->session->userdata('logged_in') !== null) {
            return $this->session->userdata('logged_in');
        } else {
            return (object) ['access_lvl' => GUEST];
        }
    }

    protected function allowOnly($allowed = [GUEST])
    {
        if (in_array($this->user()->access_lvl, $allowed)) {
            return true;
        } else {
            $this->point();
            return false;
        }
    }

    public function point()
    {
        $user_lvl = func_num_args() > 0 ? func_get_arg(0) : $this->user()->access_lvl;
        // var_dump($this->user());

        switch ($user_lvl) {
            case CUSTOMER:
                redirect('pages/customer');
                break;
            case ADMIN:
                redirect('pages/admin');
                break;
            default:
                $this->session->sess_destroy();
                redirect('pages/home');
                break;
        }
        // die;
    }

    #endregion

    #region Getters and Setters

    protected function setTitle($text)
    {
        $this->data['title'] .= " | " . $text;
    }

    protected function getTitle()
    {
        return $this->data['title'];
    }

    protected function setResponse($data = [])
    {
        $this->data = array_merge($this->data, $data);
    }

    protected function getResponse()
    {
        return $this->data['response'];
    }

    protected function customHeader($text)
    {
        array_push($this->data['customHeaders'], $text);
    }

    protected function customFooter($text)
    {
        array_push($this->data['customFooters'], $text);
    }

    #endregion

    protected function loadGuest($page)
    {
        $this->data['userHeaders'] = [

        ];
        $this->data['userFooters'] = [

        ];
        // var_dump($this->data);
        $this->load->view('header', $this->data);
        $this->load->view('nav/guest');
        $this->load->view($page, $this->data);
        $this->load->view('footer');
    }

    public function notifyUser($data)
    {
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.mailtrap.io',
            'smtp_port' => 2525,
            'smtp_user' => 'a8677413f2d127',
            'smtp_pass' => 'ad7a124069fca0',
            'crlf' => "\r\n",
            'newline' => "\r\n",
        );
        $this->email->initialize($config);

        $this->email->from($config['smtp_user'], "BagsBagsBags");
        $this->email->subject($data['subject']);
        $this->email->to($data['receipient']);
        $this->email->message($this->load->view('email/' . $data['template'], $data['billing'], true));

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            return false;
        }
    }

    public function getText($id)
    {
        $this->load->model('StatusModel');

        $text = $this->StatusModel->get($id)->text;
        return $text;
    }
}
