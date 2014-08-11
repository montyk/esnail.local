<?php

class News_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function setId($id)
	{
		$this->id = $id;
		return $this;
	}

	function setLimit($limit, $offset=0)
	{
		$this->db->limit($limit, $offset);
		return $this;
	}

	function setTitle($title)
	{
		$this->title = $title;
		return $this;
	}

	function setContent($content)
	{
		$this->content = $content;
		return $this;
	}

	function setAddedOn($added_on)
	{
		$this->added_on = $added_on;
		return $this;
	}

	function setExcerpt($excerpt)
	{
		$this->excerpt = $excerpt;
		return $this;
	}

	function orderBy($column, $order)
	{
		$this->db->order_by($column, $order);
		return $this;
	}

	function update()
	{
		if(isset($this->id))
		{
			$this->db 	->set('title', $this->title)
						->set('excerpt', $this->excerpt)
						->set('content', $this->content)
						->set('added_on', $this->added_on)
						->where('id', $this->id)
						->update('news');
		}
	}

	function insert()
	{
		if(isset($this->title)&&isset($this->content))
		{
			$this->db->set('title', $this->title)->set('content', $this->content)->insert('news');
			return $this->db->insert_id();
		}
	}

	function get()
	{
		if(isset($this->id))
		{
			$this->db->where('id', $this->id);
		}
		$query = $this->db->order_by('added_on', 'desc')->get('news');
		$result = $query->result();
		foreach($result as $r)
		{
			$r->date_month  = date('F', strtotime($r->added_on));
			$r->date_day	= date('j', strtotime($r->added_on));
			$r->date_suffix = date('S', strtotime($r->added_on));
			$r->date_year	= date('Y', strtotime($r->added_on));
		}
		if(count($result)==1)
		{
			return $result[0];
		}
			else
			{
				return $result;
			}
	}

	function delete()
	{
		if(isset($this->id))
		{
			$this->db->where('id', $this->id)->delete('news');
		}
	}
}