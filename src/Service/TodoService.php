<?php

namespace Alfred\Todo\Service;

class TodoService
{
    const TODO_FILE_PATH = './src/Files/todos.json';

    public function create(array $requestBody)
    {
        $content = [
            'content' => $requestBody['newToDo'],
            'dateCreated' => date('Y:i:d H:m:s')
        ];

        $fileContent = $this->getContentFromFile();
        $fileContent[] = $content;

        $this->putContentToFile($fileContent);
    }

    public function getContentFromFile(): array
    {
        return json_decode(file_get_contents(self::TODO_FILE_PATH), true);
    }

    private function putContentToFile(array $content): void
    {
        file_put_contents(self::TODO_FILE_PATH, json_encode($content));
    }
}