import {useEffect, useState} from "react";
import axios from "axios";
import { Card, CardHeader, CardDescription, CardContent, CardTitle } from "@/components/ui/card";
import { Car } from "lucide-react";

interface Blog {
    id: number;
    title: string;
    description: string;
    image: string | null;
}

const BlogList: React.FC = () => {
    const [blogs, setBlogs] = useState<Blog[]>([]);

    useEffect(() => {
        axios.get('/api/blogs').then((response) => {
            setBlogs(response.data);
        });
    }, []);

    return (
        <>
            <Card className="w-[350px]">
                <CardHeader>
                    <CardTitle>Blog List</CardTitle>
                </CardHeader>
                <CardContent>
                    {blogs.map((blog) => (
                        <div key={blog.id}>
                            <div>{blog.image}</div>
                            <h1>{blog.title}</h1>
                            <p>{blog.description}</p>
                        </div>
                    )
                )}
                </CardContent>
            </Card>
        </>
    )
}

export default BlogList;
