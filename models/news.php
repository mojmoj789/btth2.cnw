<?php
    class news{
        private $id;
        private $title;
        private $content;
        private $created_at;
        private $category_id;
        private $image;

        /**
         * @param $id
         * @param $title
         * @param $content
         * @param $created_at
         * @param $category_id
         * @param $image
         */
        public function __construct($id, $title, $content, $created_at, $category_id, $image)
        {
            $this->id = $id;
            $this->title = $title;
            $this->content = $content;
            $this->created_at = $created_at;
            $this->category_id = $category_id;
            $this->image = $image;
        }

        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id): void
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getTitle()
        {
            return $this->title;
        }

        /**
         * @param mixed $title
         */
        public function setTitle($title): void
        {
            $this->title = $title;
        }

        /**
         * @return mixed
         */
        public function getContent()
        {
            return $this->content;
        }

        /**
         * @param mixed $content
         */
        public function setContent($content): void
        {
            $this->content = $content;
        }

        /**
         * @return mixed
         */
        public function getCreatedAt()
        {
            return $this->created_at;
        }

        /**
         * @param mixed $created_at
         */
        public function setCreatedAt($created_at): void
        {
            $this->created_at = $created_at;
        }

        /**
         * @return mixed
         */
        public function getCategoryId()
        {
            return $this->category_id;
        }

        /**
         * @param mixed $category_id
         */
        public function setCategoryId($category_id): void
        {
            $this->category_id = $category_id;
        }

        /**
         * @return mixed
         */
        public function getImage()
        {
            return $this->image;
        }

        /**
         * @param mixed $image
         */
        public function setImage($image): void
        {
            $this->image = $image;
        }



    }