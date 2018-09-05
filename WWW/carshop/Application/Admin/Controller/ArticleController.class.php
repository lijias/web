<?php
namespace Admin\Controller;


	class ArticleController extends CommonController 
{
		//文章管理
    	public function lst()
    	{
    		$article = D("ArticleView");
    		$where = 1;
    		$kw=I("kw");
    		$search=I("search-sort");
    		if ($kw)
    		{
    			$where.=' AND title LIKE "%'.$kw.'%"';
    		}
    		if ($search)
    		{
    			$where.=' AND cateid LIKE "%'.$search.'%"';
    		}
    		$count = $article->where($where)->count();
    		$page = new \Think\Page($count,5);
    		$show = $page->show();
    		$list = $article->where($where)->limit($page->firstRow,$page->listRows)->select();
    		
    		$cate = D("cate");
    		$cates = $cate->catetree();
    		$this->assign("cates",$cates);
    		$this->assign("list",$list);
    		$this->assign("page",$show);
        	$this->display();
    	}
    	//新增文章
    	public function add()
    	{
    		$article = D("article");
    		if (IS_POST) {
    			
    			$data['rizu'] = I('rizu');
    			$data['num'] = I('num');
    			$data['atype'] = I('atype');
    			$data['title'] = I('title');
    			$data['author'] = I('author');
    			$data['cateid'] = I('cateid');
    			$data['rem'] = I('rem');
    			$data['keywords'] = I('keywords');
    			$data['content'] = I('content');
    			$data['des'] = I('des');
    			$data['time'] = time();
    			if ($_FILES['pic']['tmp_name']!='')
    			{
    				$upload = new \Think\Upload();//实例化上传类
    				$upload->maxSize = 3145728 ;// 设置附件上传大小
    				$upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    				$upload->savePath = './Public/Uploads/'; // 设置附件上传目录
    				$upload->rootPath = './';
    				// 上传文件
    				$info = $upload->uploadOne($_FILES['pic']);
    				if(!$info)
    				{// 上传错误提示错误信息
    					$this->error($upload->getError());
    				}
    				else
    				{// 上传成功
    					$data['pic'] = $info['savepath'].$info['savename'];
    				}
    			}
    			if ($article->create($data))
    			{
    				if ($article->add())
    				{
    					$this->success('新增文章成功!',U('lst'));
    				}
    				else
    				{
    					$this->error('新增文章失败!');
    				}
    			}
    			else
    			{
    				$this->error($article->getError());
    			}
    			return;
    		}
    		$cate = D("cate");
    		$cates = $cate->catetree();
    		$this->assign("cates",$cates);
    		$this->display();
    	}
    	//修改文章
    	public function update($id)
    	{
    		$article = D("article");   		
    		if (IS_POST) {    			
    			$data['id'] = I('id');
    			$data['rizu'] = I('rizu');
    			$data['num'] = I('num');
    			$data['atype'] = I('atype');
    			$data['title'] = I('title');
    			$data['author'] = I('author');
    			$data['cateid'] = I('cateid');
    			$data['rem'] = I('rem');
    			$data['keywords'] = I('keywords');
    			$data['content'] = I('content');
    			$data['des'] = I('des');
    			$data['time'] = time();
    			if ($_FILES['pic']['tmp_name']!='')
    			{
    				$upload = new \Think\Upload();//实例化上传类
    				$upload->maxSize = 3145728 ;// 设置附件上传大小
    				$upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    				$upload->savePath = './Public/Uploads/'; // 设置附件上传目录
    				$upload->rootPath = './';
    				// 上传文件
    				$info = $upload->uploadOne($_FILES['pic']);
    				if(!$info)
    				{// 上传错误提示错误信息
    					$this->error($upload->getError());
    				}
    				else
    				{// 上传成功
    					$data['pic'] = $info['savepath'].$info['savename'];
    				}
    			}
    			if ($article->create($data))
    			{
    				if ($article->save())
    				{
    					$this->success('修改文章成功!',U('lst'));
    				}
    				else
    				{
    					$this->error('修改文章失败!');
    				}
    			}
    			else
    			{
    				$this->error($article->getError());
    			}
    			return;
    		}
    		
    		$artres = $article->find($id);
    		
    		$cate = D("cate");
    		$cates = $cate->catetree();
    		$this->assign("cates",$cates);
    		$this->assign("artres",$artres);
    		$this->display();
    	}
    	//删除文章
    	public function delete()
    	{
    		$article = D("article");
    		$id = I("id");
    		if ($article->delete($id)) 
    		{
    			$this->success("删除文章成功!",U("lst"));
    		}
    		else 
    		{
    			$this->error("删除文章失败!");
    		}
    	}
    	//批量删除文章
    	public function bdelete()
    	{
    		$article = D("article");
    		$ids = I("ids");
    		$ids = implode(",", $ids);
    		if ($ids)
    		{
    			if ($article->delete($ids))
    			{
    				$this->success("批量删除文章成功!",U("lst"));
    			}
    			else
    			{
    				$this->error("批量删除文章失败!");
    			}
    		} 
    		else 
    		{
    			$this->error("未选中任何数据");
    		}  		
    	}
}