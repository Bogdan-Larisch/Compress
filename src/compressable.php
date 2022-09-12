namespace nsCompress;

interface ICompressedData {
}

interface IBinaryTree {
}

interface ICompresable {
	public ICompressedData Compress(String $str) ;
	public String Decompress(ICompressedData $data);
}